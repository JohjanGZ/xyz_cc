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
  #boxCheck img{
    width: 600px;
  }
  .conjuntosOpciones{
    display: grid;
    grid-template-columns: 2fr 2fr 2fr 2fr 2fr;
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
            padding-top: 2vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
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
        <div class=" col s12">
            <img src="img/1-18/conjunto.gif" alt="">
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s6">
            <h4>• B ∩ S = <span class="llavesContainer ">{</span> <span class="infoContainer groupM" data-value="bs"> </span> <span class="llavesContainer">}</span></h4>
        </div>
        <div class="cajas col s6">
            <h4>• H ∩ M = <span class="llavesContainer ">{</span> <span class="infoContainer groupS" data-value="hm"> </span> <span class="llavesContainer ">}</span></h4>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="col s12 conjuntosOpciones aleatorio">
            <p class="obj" data-value="hm">gorro</p>
            <p class="obj" data-value="bs">5</p>
            <p class="obj" data-value="bs">6</p>
            <p class="obj" data-value="o">camisa</p>
            <p class="obj" data-value="o">falda</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/1-18/respuesta.png">
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

    function result_tipo_2_0_18() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (rpts == 3 && otros == 0) {

          console.log(rpts, otros);
            localStorage.setItem("Nota2-0-18", "2");
            localStorage.setItem("Time2-0-18", tiempo);
            correcto();

        }

        else {
            console.log(rpts, otros);
            incorrecto();
            localStorage.setItem("Nota2-0-18", "0");
            localStorage.setItem("Time2-0-18", tiempo);

        }
    }

    var cols = document.querySelectorAll('.aleatorio');

    [].forEach.call(cols, (e)=>{

        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }

    });

</script>