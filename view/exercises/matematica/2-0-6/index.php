<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
  #boxCheck{
    text-align: center;
  }
  .infoContainer{
    border: 1px solid #333;
    padding: 15px 160px;
    border-radius: 10px;
    margin: 0px 10px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 2fr;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #ffd54f ;
    padding: 4px 20px;
    text-align: center;
    border-radius: 10px;
  }
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 4vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }
    @media only screen and (max-width: 1100px){
        .container-two {
            padding-top: 10vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 90%;
        }
    }
</style>
<?=$titulo?>
<div class="container-two">
<div class="row boxCheck">
        <div class="cajas col s6">
            <h4>Ambientes de la casa:</h4>
        </div>
        <div class="cajas col s6">
            <h4>• C = <span class="llavesContainer ">{</span> <span class="infoContainer groupCasa"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s6">
            <h4> Estaciones del año:</h4>
        </div>
        <div class="cajas col s6">
            <h4>• E = <span class="llavesContainer ">{</span> <span class="infoContainer groupEstacion"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="casa">baño</p>
            <p class="obj" data-value="casa">cocina</p>
            <p class="obj" data-value="casa">comedor</p>
            <p class="obj" data-value="casa">cochera</p>
            <p class="obj" data-value="estacion">verano</p>
            <p class="obj" data-value="estacion">invierno</p>
            <p class="obj" data-value="estacion">primavera</p>
            <p class="obj" data-value="estacion">otoño</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-6/respuesta6.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">

    var grupoCasa = 0, grupoEstacion = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".groupCasa" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="casa"){
          grupoCasa++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".groupEstacion" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="estacion"){
          grupoEstacion++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(grupoCasa, grupoEstacion);
    // Formulario - Registrados

    function result_tipo_2_0_6() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupoCasa == 4 && grupoEstacion == 4 && otros == 0) {

            console.log(grupoCasa, grupoEstacion);
            localStorage.setItem("Nota2-0-6", "2");
            localStorage.setItem("Time2-0-6", tiempo);
            correcto();

        }

        else {
            console.log(grupoCasa, grupoEstacion);
            incorrecto();
            localStorage.setItem("Nota2-0-6", "0");
            localStorage.setItem("Time2-0-6", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>