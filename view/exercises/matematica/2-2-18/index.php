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
        <div class="fila objetos">
            <div class="obj" data-value="927">927</div>
            <div class="obj" data-value="623">623</div>
            <div class="obj" data-value="795">795</div>
            <div class="obj" data-value="842">842</div>
            <div class="obj" data-value="930">930</div>
            <div class="obj" data-value="701">701</div>
        </div>
        <div class="fila respuesta">
            <div class="droppable" data-value="623"></div>
            <div class="droppable" data-value="701"></div>
            <div class="droppable" data-value="795"></div>
            <div class="droppable" data-value="842"></div>
            <div class="droppable" data-value="927"></div>
            <div class="droppable" data-value="930"></div>
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

var element;

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
          $(elementId).css({
            "background":"transparent",
            "color": "#000"
          });
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
function result_tipo_2_2_18() {
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