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

    @media screen and (max-height: 700px) {
        .cajas{
            height: 60px;
        }
        .row {
            margin: 5px !important;
            border-radius: 10px;
        }
        .cajaOpciones{
            margin-top: 0px;
        }
        .cajaOpciones p {
            background-color: cornflowerblue;
            padding: 6px 20px;
            font-size: 13px;
            text-align: center;
            font-weight: 600;
        }
}
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 372</h4>
            <span class="droppable" data-value="372"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 426</h4>
            <span class="droppable" data-value="426"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 515</h4>
            <span class="droppable" data-value="515"></span>
        </div>
    </div>
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas formatBox col s10">
            <h4>• 210</h4>
            <span class="droppable" data-value="210"></span>
        </div>
    </div>
    <div class="row boxCheck aleatorio" id="boxCheck">
        <div class="cajas cajaOpciones col s12 aleatorio">
            <p class="obj" data-value="372">trescientos setenta y dos</p>
            <p class="obj" data-value="426">cuatrocientos veintiséis</p>
            <p class="obj" data-value="515">quinientos quince</p>
            <p class="obj" data-value="210">doscientos diez</p>
            <p class="obj" data-value="618">Ciento ochenta y nueve</p>
            <p class="obj" data-value="589">Cuatrocientos dieciocho</p>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/2-1-5/respuesta.png">
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

function result_tipo_2_1_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 4 && otros == 0) {
        console.log(rpta, otros);
        localStorage.setItem("Nota2-1-5", "2");
        localStorage.setItem("Time2-1-5", tiempo);
        correcto();

    }

    else {
        console.log(rpta, otros);
        incorrecto();
        localStorage.setItem("Nota2-1-5", "0");
        localStorage.setItem("Time2-1-5", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>