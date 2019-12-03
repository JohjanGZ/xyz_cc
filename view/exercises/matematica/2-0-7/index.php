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
    padding: 12px 160px;
    border-radius: 10px;
    margin: 0px 10px;
  }
  #boxCheck img{
    width: 300px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 2fr;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #ffd54f ;
    padding: 8px 20px;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
  }
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 2vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }

    @media screen and (min-width: 1350px){
        .container-two {
            padding-top: 6vh;
            margin: 0 auto;
            max-width: 1200px;
            width: 91%;
        }
    }

    @media only screen and (max-width: 1100px){
        .container-two {
            padding-top: 2vh;
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
            <img src="img/1-7/conjuntoDos.png" alt="">
        </div>
        <div class=" col s6">
            <img src="img/1-7/conjuntoUno.png" alt="">
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s6">
            <h4>• M = <span class="llavesContainer ">{</span> <span class="infoContainer groupM"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <h4>• S = <span class="llavesContainer ">{</span> <span class="infoContainer groupS"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="l">L</p>
            <p class="obj" data-value="l">I</p>
            <p class="obj" data-value="l">B</p>
            <p class="obj" data-value="l">R</p>
            <p class="obj" data-value="l">O</p>
            <p class="obj" data-value="n">1</p>
            <p class="obj" data-value="n">2</p>
            <p class="obj" data-value="n">3</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-7/respuesta7.png">
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

    var grupoM = 0, grupoS = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".groupM" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="l"){
          grupoM++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".groupS" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="n"){
          grupoS++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(grupoM, grupoS);
    // Formulario - Registrados

    function result_tipo_2_0_7() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupoM == 5 && grupoS == 3 && otros == 0) {

          console.log(grupoM, grupoS);
            localStorage.setItem("Nota2-0-7", "2");
            localStorage.setItem("Time2-0-7", tiempo);
            correcto();

        }

        else {
          console.log(grupoM, grupoS);
            incorrecto();
            localStorage.setItem("Nota2-0-7", "0");
            localStorage.setItem("Time2-0-7", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>