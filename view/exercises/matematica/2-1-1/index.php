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
    padding:  12px 40px;
    border-radius: 10px;
    margin: 2px 6px;
    background: #B6ECFF;
    border: 1px solid #ccc !important;
    color: #333;
  }
  #boxCheck img{
    width: 300px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    justify-items: center;
    align-items: center;
  }
  .conjuntosOpciones p{
    background: #eceff1;
    border: 1px solid #607d8b;
    padding: 6px 15px;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
  }
  .rojoBox{
    background: rgb(255, 102, 102);
  }
  .amarilloBox{
    background: rgb(255, 204, 0);
  }
  .azulBox{
    background: rgb(0, 153, 255);
  }
    @media only screen and (max-width: 1200px){
        .container-two {
            padding-top: 2vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
    }
    @media screen and (max-height: 700px) {
  center h5{
    font-size: 20px;
  }
  .row{
    margin: 0px !important;
  }
  .cajas{
    height: 100px;
  }
  .infoContainer{
    border: 1px solid #333;
    padding:  8px 40px;
    border-radius: 10px;
    margin: 0px 6px;
    background: #B6ECFF;
    border: 1px solid #ccc !important;
    color: #333;
  }
  .conjuntosOpciones{
    grid-gap: 0px;
    grid-row: 0px;
  }
  .conjuntosOpciones p{
    background: #eceff1;
    border: 1px solid #607d8b;
    padding: 4px 15px;
    text-align: center;
    border-radius: 10px;
    font-weight: bold;
  }
}
  
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="col s1"></div>
        <div class="cajas rojoBox col s3">
              <h4>325</h4>
        </div>
        <div class="cajas col s7">
          <h6><span class="infoContainer groupM" data-value="3"> </span>centenas, <span class="infoContainer groupM" data-value="2"> </span>decenas y  <span class="infoContainer groupM" data-value="5"> </span> unidades</h6>
          <h6><span class="infoContainer groupM" data-value="300"> </span> + <span class="infoContainer groupM" data-value="20"> </span> + <span class="infoContainer groupM" data-value="5"> </span> = <span class="infoContainer groupM" data-value="325"> </span> </h6>
        </div>
        <div class="col s1"></div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="col s1"></div>
        <div class="cajas amarilloBox col s3">
              <h4>534</h4>
        </div>
        <div class="cajas col s7">
          <h6><span class="infoContainer groupM" data-value="5"> </span>centenas, <span class="infoContainer groupM" data-value="3"> </span>decenas y  <span class="infoContainer groupM" data-value="4"> </span> unidades</h6>
          <h6><span class="infoContainer groupM" data-value="500"> </span> + <span class="infoContainer groupM" data-value="30"> </span> + <span class="infoContainer groupM" data-value="4"> </span> = <span class="infoContainer groupM" data-value="534"> </span> </h6>
        </div>
        <div class="col s1"></div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="col s1"></div>
        <div class="cajas azulBox col s3">
              <h4>466</h4>
        </div>
        <div class="cajas col s7">
          <h6><span class="infoContainer groupM" data-value="4"> </span>centenas, <span class="infoContainer groupM" data-value="6"> </span>decenas y  <span class="infoContainer groupM" data-value="6"> </span> unidades</h6>
          <h6><span class="infoContainer groupM" data-value="400"> </span> + <span class="infoContainer groupM" data-value="60"> </span> + <span class="infoContainer groupM" data-value="6"> </span> = <span class="infoContainer groupM" data-value="466"> </span> </h6>
        </div>
        <div class="col s1"></div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="3">3</p>
            <p class="obj" data-value="2">2</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="300">300</p>
            <p class="obj" data-value="20">20</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="325">325</p>
            <p class="obj" data-value="5">5</p>
            <p class="obj" data-value="3">3</p>
            <p class="obj" data-value="4">4</p>
            <p class="obj" data-value="500">500</p>
            <p class="obj" data-value="30">30</p>
            <p class="obj" data-value="4">4</p>
            <p class="obj" data-value="534">534</p>
            <p class="obj" data-value="4">4</p>
            <p class="obj" data-value="6">6</p>
            <p class="obj" data-value="6">6</p>
            <p class="obj" data-value="400">400</p>
            <p class="obj" data-value="60">60</p>
            <p class="obj" data-value="6">6</p>
            <p class="obj" data-value="466">466</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/2-1-1/respuesta.png">
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

    var rpta = 0, otros = 0, element;

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
        $(this).css("background-color", "#eceff1");
        $(".obj").css("border", "none");
      //  $( this ).target.append(event.target);
        element2 = $(this).attr("data-value");
        console.log(element, element2);
        if(element==element2){
          rpta++;
        }else{
          otros++;
        }
        element.removeClass("pieza");
      }
    });
    console.log(rpta, otros);
    // Formulario - Registrados

    function result_tipo_2_1_1() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpta == 21 && otros == 0) {

            localStorage.setItem("Nota2-1-1", "2");
            localStorage.setItem("Time2-1-1", tiempo);
            correcto();

        }

        else {
            incorrecto();
            localStorage.setItem("Nota2-1-1", "0");
            localStorage.setItem("Time2-1-1", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>