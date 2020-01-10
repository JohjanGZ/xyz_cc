<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
    @media only screen and (max-width: 1300px){
        .container-two {
            padding-top: 4vh;
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
    @media screen and (max-height: 680px){
        .container-two {
            padding-top: 6vh;
            margin: 0 auto;
            max-width: 1100px;
            width: 81%;
        }
        center h5{
            font-size:20px;
        }
        .row{
            margin: 10px!important;
        }
    }
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4> • Setecientos sesenta y ocho</h4>
            <span class="droppable" data-value="768"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4> • Novecientos ochenta y tres</h4>
            <span class="droppable" data-value="983"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• Seiscientos veinticuatro</h4>
            <span class="droppable" data-value="624"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• Ochocientos cuarenta y seis</h4>
            <span class="droppable" data-value="846"></span>
        </div>
    </div>
    <div class="row boxCheck aleatorio" id="boxCheck">
        <div class="cajas cajaOpciones col s12 aleatorio">
            <p class="obj" data-value="768">768</p>
            <p class="obj" data-value="984">984</p>
            <p class="obj" data-value="523">523</p>
            <p class="obj" data-value="983">983</p>
            <p class="obj" data-value="624">624</p>
            <p class="obj" data-value="846">846</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/4/respuesta.png">
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
$( ".droppable" ).droppable({
  classes: {
    "ui-droppable-active": ".blue",
    "ui-droppable-hover": "ui-state-hover"
  },
  drop: function( event, ui ) {
    $(this).css("background-color", "cornflowerblue");
    $(".obj").css("border", "none");
  //  $( this ).target.append(event.target);
    element2 = $(this).attr("data-value");
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

function result_tipo_2_2_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 4 && otros == 0) {
        console.log(rpta, otros);
        localStorage.setItem("Nota2-2-11", "2");
        localStorage.setItem("Time2-2-11", tiempo);
        correcto();

    }

    else {
        console.log(rpta, otros);
        incorrecto();
        localStorage.setItem("Nota2-2-11", "0");
        localStorage.setItem("Time2-2-11", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>