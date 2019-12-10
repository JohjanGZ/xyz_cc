<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="item card-panel blue darken-1">
        <div class="numero aleatorio" >
            <h5 class="obj" data-value="205">205</h5>
            <h5 class="obj" data-value="380">380</h5>
            <h5 class="obj" data-value="165">165</h5>
            <h5 class="obj" data-value="453">453</h5>
            <h5 class="obj" data-value="435">435</h5>
            <h5 class="obj" data-value="256">256</h5>
        </div>
        <div class="selector" id="cajas">
           <div class="droppable card-panel" data-value="453"></div>
           <div class="droppable card-panel" data-value="435"></div>
           <div class="droppable card-panel" data-value="380"></div>
           <div class="droppable card-panel" data-value="256"></div>
           <div class="droppable card-panel" data-value="205"></div>
           <div class="droppable card-panel" data-value="165"></div>
        </div>
    </div>
    <div class="item card-panel blue darken-1">
        <div class="numero aleatorio">
            <h5 class="obj" data-value="500">500</h5>
            <h5 class="obj" data-value="312">312</h5>
            <h5 class="obj" data-value="199">199</h5>
            <h5 class="obj" data-value="421">421</h5>
            <h5 class="obj" data-value="478">478</h5>
            <h5 class="obj" data-value="321">321</h5>
        </div>
        <div class="selector" id="cajas">
           <div class="droppable card-panel" data-value="500"></div>
           <div class="droppable card-panel" data-value="478"></div>
           <div class="droppable card-panel" data-value="421"></div>
           <div class="droppable card-panel" data-value="321"></div>
           <div class="droppable card-panel" data-value="312"></div>
           <div class="droppable card-panel" data-value="199"></div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/11/respuesta.png">
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

var rpta = 0, otros = 0, element, element2;

    $(".obj").draggable({
        revert:false,
        start: function() {
            element=$(this).attr("data-value"); 
        },
        // finish: function(){
        //     $(this).css("box-shadow","none");
        // }
        
    });
    $( ".droppable" ).droppable({
      classes: {
        "ui-droppable-active": "",
        "ui-droppable-hover": "dropable-hover"
      },
      drop: function( event, ui ) {
        element2 = $(this).attr("data-value");
        $(this).css("background-color", "rgb(255, 255, 255)");
      //  $( this ).target.append(event.target);

        if(element == element2){
          rpta++;
          console.log(element)
          console.log(element2)
        }else{
          otros++;
        }
        element.remoeClass('pieza');
      }
    });
// Formulario - Registrados

function result_tipo_2_3_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 12 && otros == 0) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-17", "2");
        localStorage.setItem("Time2-3-17", tiempo);
        correcto();

    }

    else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-17", "0");
        localStorage.setItem("Time2-3-17", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>