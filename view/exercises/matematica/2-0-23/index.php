<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
  #boxCheck{
    text-align: center;
  }
  #boxCheck h4{
    color: #424242;
    font-weight: 600;
  }
  .infoContainer{
    border: 1px solid #536dfe ;
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
    font-weight: bold;
    font-size: 20px;
  }
  .boxCheck .cajas h4{
    color: #1565c0;
    font-weight: 500;
  }
  .spaceStyle {
  padding: 0px 25px;
}
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 10vh;
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
    <div class="row boxCheck" id="boxCheck">
        <div class=" col s12">
            <h4>• A = {1; 2; 3; 4; 5; 6} <span class="spaceStyle"> </span> • B = {2; 4; 6}  <span class="spaceStyle"> </span>  • C = {1; 3; 5; 7}</h4>
        </div>
    </div>
    <div class="row boxCheck ">
        <div class="cajas col s6">
            <h4>• A ∪ B = <span class="llavesContainer ">{</span> <span class="infoContainer groupAB"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <h4>• A ∪ C = <span class="llavesContainer ">{</span> <span class="infoContainer groupAC"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="uno">1; 2; 3; 4; 5; 6</p>
            <p class="obj" data-value="dos">1; 2; 3; 4; 5; 6; 7</p>
            <p class="obj" data-value="tres">1;3;4;5;7;</p>
            <p class="obj" data-value="cuatro">1;2;4;6;7</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-23/respuesta.png">
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

    var grupoAB = 0, grupoAC = 0, otros = 0, element;

    $(".obj").draggable({
        
        start: function() {
         element=$(this).attr("data-value"); 
     }
    });
    $( ".groupAB" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="uno"){
          grupoAB++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    $( ".groupAC" ).droppable({
      classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);

        if(element=="dos"){
          grupoAC++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(grupoFD, grupoGR);
    // Formulario - Registrados

    function result_tipo_2_0_23() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (grupoAB == 1 && grupoAC == 1 && otros == 0) {

            console.log(grupoFD, grupoGR);
            localStorage.setItem("Nota2-0-23", "2");
            localStorage.setItem("Time2-0-23", tiempo);
            correcto();

        }

        else {
          console.log(grupoFD, grupoGR);
            incorrecto();
            localStorage.setItem("Nota2-0-23", "0");
            localStorage.setItem("Time2-0-23", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>