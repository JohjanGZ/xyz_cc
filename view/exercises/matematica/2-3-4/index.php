<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
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
        <div class="cajas formatBox col s10">
            <h4>• 8<span class="rojo">C</span> 6<span class="azul">U</span> 3 <span class="verde">D</span> 1<span class="naranja">UM</span></h4>
            <span class="droppable" data-value="1836"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>  • 8<span class="naranja">UM</span> 8<span class="azul">U</span> 3<span class="rojo">C</span> 4<span class="verde">D</span></h4>
            <span class="droppable" data-value="8348"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 6<span class="azul">U</span> 5<span class="rojo">C</span> 3<span class="verde">D</span></h4>
            <span class="droppable" data-value="536"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 5<span class="naranja">UM</span> 2<span class="azul">U</span> 8<span class="verde">D</span></h4>
            <span class="droppable" data-value="5082"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 3<span class="verde">D</span> 9<span class="naranja">UM</span></h4>
            <span class="droppable" data-value="9030"></span>
        </div>
    </div>
        <div class="cajas cajaOpciones col s10 aleatorio">
            <p class="obj" data-value="1836">1836</p>
            <p class="obj" data-value="8348">8348</p>
            <p class="obj" data-value="536">536</p>
            <p class="obj" data-value="5082">5082</p>
            <p class="obj" data-value="9030">9030</p>
            <p class="obj" data-value="3090">3090</p>
        </div>

</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
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
    ui.draggable.draggable("disable", 1);
  }
});
console.log(rpta, otros);
// Formulario - Registrados

function result_tipo_2_3_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 5 && otros == 0) {
        console.log(rpta, otros);
        localStorage.setItem("Nota2-1-4", "2");
        localStorage.setItem("Time2-1-4", tiempo);
        correcto();

    }

    else {
        console.log(rpta, otros);
        incorrecto();
        localStorage.setItem("Nota2-1-4", "0");
        localStorage.setItem("Time2-1-4", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>