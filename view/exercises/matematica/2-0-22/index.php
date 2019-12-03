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
            padding-top: 3vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }
    @media only screen and (max-width: 1100px){
        .container-two {
            padding-top: 4vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 90%;
        }
    }
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class=" col s6">
            <img src="img/1-15/conjuntoUno.png" alt="">
        </div>
        <div class=" col s6">
            <img src="img/1-15/conjuntoDos.png" alt="">
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s6">
            <h4>• F ∪ D = <span class="llavesContainer ">{</span> <span class="infoContainer groupFD"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <h4>• G ∪ R = <span class="llavesContainer ">{</span> <span class="infoContainer groupGR"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="uno">a, e, i, u</p>
            <p class="obj" data-value="dos">a, e, i, o, u</p>
            <p class="obj" data-value="tres">uvas, manzana, fresa</p>
            <p class="obj" data-value="cuatro">uvas, naranja, plátano, manzana, fresa</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-21/respuesta.png">
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

    var grupoFD = 0, grupoGR = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".groupFD" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="dos"){
          grupoFD++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".groupGR" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="cuatro"){
          grupoGR++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(grupoFD, grupoGR);
    // Formulario - Registrados

    function result_tipo_2_0_22() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupoFD == 1 && grupoGR == 1 && otros == 0) {

            console.log(grupoFD, grupoGR);
            localStorage.setItem("Nota2-0-22", "2");
            localStorage.setItem("Time2-0-22", tiempo);
            correcto();

        }

        else {
          console.log(grupoFD, grupoGR);
            incorrecto();
            localStorage.setItem("Nota2-0-22", "0");
            localStorage.setItem("Time2-0-22", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>