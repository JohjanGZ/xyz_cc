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
    padding: 6px 160px;
    border-radius: 10px;
    margin: 0px 10px;
    text-align:center;
  }
  #boxCheck img{
    width: 300px;
    height: auto;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 170px 170px 170px 170px 170px 170px!important;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #ffd54f ;
    padding: 4px 15px;
    text-align: center;
    border-radius: 10px;
  }
  #instrumentos{
    width: 300px!important;
  }
  .container-two{
    display: grid;
    grid-template-columns: 11fr 1fr;
  }
  #boxCheck{
    grid-column: 1/2;
    grid-row: 1/2;
  }
  #gridDos{
    grid-column: 1/2;
    grid-row: 2/3;
  }
  #gridTres{
    grid-column: 1/2;
    grid-row: 3/4;
  }
  #gridCuatro{
    grid-column: 1/2;
  }
  @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 2vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
        .conjuntosOpciones{
          display: grid;
          grid-template-columns: 200px 200px 200px 200px 200px 200px 200px;
          justify-items: center;
          align-items: center;
        }
    }

    @media screen and (min-width: 1350px){
        .container-two {
            padding-top: 6vh;
            margin: 0 auto;
            max-width: 1200px;
            width: 81%;
        }
        .conjuntosOpciones{
          display: grid;
          grid-template-columns: 220px 220px 220px 220px 220px 220px!important;
          justify-items: center;
          align-items: center;
        }
        #boxCheck img{
          width: 400px;
          height: auto;
          margin-bottom: 20px;
        }
        #gridCuatro{
          padding-top: 30px;
        }
        .infoContainer{
          padding: 4px 200px;
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
            <img src="img/1-12/conjuntoD.png" alt="">
        </div>
        <div class=" col s6">
            <img src="img/1-12/conjuntoM.png" alt="">
        </div>
    </div>
    <div class="row boxCheck" id="gridDos">
        <div class="cajas col s6">
            <label for="">• Por extensión:</label>
            <h4>• D = <span class="llavesContainer ">{</span> <span class="infoContainer deportesE" data-value="d"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
        <label for="">Por extensión:</label>
            <h4>• M = <span class="llavesContainer ">{</span> <span class="infoContainer musicaE" data-value="i"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck" id="gridtres">
        <div class="cajas col s6">
            <label for="">• Por comprensión:</label>
            <h4>• D = <span class="llavesContainer ">{</span> <span class="infoContainer deportesC" data-value="deportes"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <label for="">Por comprensión:</label>
            <h4>• M = <span class="llavesContainer ">{</span> <span class="infoContainer musicaC" data-value="instrumentos"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white" id="gridCuatro">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" id="intrumentos" data-value="instrumentos">Instrumentos musicales</p>
            <p class="obj" data-value="deportes">Deportes</p>
            <p class="obj" data-value="d">karate</p>
            <p class="obj" data-value="d">basketball</p>
            <p class="obj" data-value="d">futbol</p>
            <p class="obj" data-value="d">tennis</p>
            <p class="obj" data-value="d">gimnasia</p>
            <p class="obj" data-value="i">trompeta</p>
            <p class="obj" data-value="i">flauta</p>
            <p class="obj" data-value="i">piano</p>
            <p class="obj" data-value="i">guitarra</p>
            <p class="obj" data-value="i">violín</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="60%" src="img/1-12/respuesta.png">
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

    var rpts = 0, otros = 0, element, element2;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".infoContainer" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);
          element2=$(this).attr("data-value");
        if(element==element2){
          rpts++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(rpts, otros);
    // Formulario - Registrados

    function result_tipo_2_0_12() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpts == 12 && otros == 0) {

          console.log(rpts, otros);
            localStorage.setItem("Nota2-0-12", "2");
            localStorage.setItem("Time2-0-16", tiempo);
            correcto();

        }

        else {
            console.log(rpts, otros);
            incorrecto();
            localStorage.setItem("Nota2-0-12", "0");
            localStorage.setItem("Time2-0-12", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>