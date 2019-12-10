<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="item card-panel blue darken-1">
        <div class="numero aleatorio" >
            <h5 class="obj" data-value="272">272</h5>
            <h5 class="obj" data-value="116">116</h5>
            <h5 class="obj" data-value="358">358</h5>
            <h5 class="obj" data-value="227">227</h5>
            <h5 class="obj" data-value="499">499</h5>
            <h5 class="obj" data-value="126">126</h5>
        </div>
        <div class="selector" id="cajas">
            <div class="droppable card-panel" data-value="116"></div>
            <div class="droppable card-panel" data-value="126"></div>
            <div class="droppable card-panel" data-value="227"></div>
            <div class="droppable card-panel" data-value="272"></div>
            <div class="droppable card-panel" data-value="358"></div>
            <div class="droppable card-panel" data-value="499"></div>
        </div>
    </div>
    <div class="item card-panel blue darken-1">
        <div class="numero aleatorio">
            <h5 class="obj" data-value="476">476</h5>
            <h5 class="obj" data-value="118">118</h5>
            <h5 class="obj" data-value="237">237</h5>
            <h5 class="obj" data-value="362">362</h5>
            <h5 class="obj" data-value="263">263</h5>
            <h5 class="obj" data-value="195">195</h5>
        </div>
        <div class="selector" id="cajas">
           <div class="droppable card-panel" data-value="118"></div>
           <div class="droppable card-panel" data-value="195"></div>
           <div class="droppable card-panel" data-value="237"></div>
           <div class="droppable card-panel" data-value="263"></div>
           <div class="droppable card-panel" data-value="362"></div>
           <div class="droppable card-panel" data-value="476"></div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/12/respuesta.png">
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
        element.removeClass('pieza');
      }
    });
// Formulario - Registrados

function result_tipo_2_3_17() {
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