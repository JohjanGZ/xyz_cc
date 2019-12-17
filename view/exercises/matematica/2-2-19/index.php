<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="fila objetos aleatorio">
            <div class="obj" data-value="946">946</div>
            <div class="obj" data-value="835">835</div>
            <div class="obj" data-value="799">799</div>
            <div class="obj" data-value="714">714</div>
            <div class="obj" data-value="610">610</div>
            <div class="obj" data-value="508">508</div>
        </div>
        <div class="fila respuesta">
            <div class="droppable" data-value="946"></div>
            <div class="droppable" data-value="835"></div>
            <div class="droppable" data-value="799"></div>
            <div class="droppable" data-value="714"></div>
            <div class="droppable" data-value="610"></div>
            <div class="droppable" data-value="508"></div>
        </div>
    </div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript">
var element;
var r =0;
$(".obj").draggable( {
      revert: true,
      start: function() {
       element=$(this).attr("data-value");
       elementId = $(this);
     }
     
} );

$( ".droppable" ).droppable({
   
     
   classes: {
     "ui-droppable-hover": "hoverBox"
   },
   drop: function( event, ui ) {
         val = $(this).attr("data-value");
       $(elementId).css("background","transparent");
       //$( this ).target.append(event.target);
     if(element == val){
         r++;
     }
      element.removeClass("pieza");   
       
   }
 });

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
// Validar
function result_tipo_2_2_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>