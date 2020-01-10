<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
  $numeros= array('1','2','3','4','5','6','7')
?>
<div class="container">
    <div class="content">
        <div class="tabla">
            <div class="box contenedor box1" alt="12"></div>
            <div class="box contenedor box2" alt="6"></div>
            <div class="box contenedor box3" alt="8"></div>
            <div class="box contenedor box4" alt="4"></div>
            <div class="box contenedor box5" alt="10"></div>
            <div class="box contenedor box6" alt="5"></div>
            <div class="box contenedor box7" alt="3"></div>
            <div class="box contenedor box8" alt="6"></div>
            <div class="box contenedor box9" alt="5"></div>
            <div class="box contenedor box10" alt="10"></div>
            <div class="box contenedor box11" alt="4"></div>
            <div class="box contenedor box12" alt="8"></div>
        </div>
        <div class="respuestas">
            <p class="pieza" alt="12">12</p>
            <p class="pieza" alt="6">6</p>
            <p class="pieza" alt="8">8</p>
            <p class="pieza" alt="4">4</p>
            <p class="pieza" alt="10">10</p>
            <p class="pieza" alt="5">5</p>
            <p class="pieza" alt="3">3</p>
            <p class="pieza" alt="6">6</p>
            <p class="pieza" alt="5">5</p>
            <p class="pieza" alt="10">10</p>
            <p class="pieza" alt="4">4</p>
            <p class="pieza" alt="8">8</p>
        </div>
    </div>
</div>
</section>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript">
r = 0;
arrastre();

function result_tipo_2_5_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 12) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>