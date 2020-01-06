<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">
</style>
<?=$titulo?>
<div class="container-two">
    <div class="info aleatorio">
        <div class="item itemuno">
            <span>El <div><img class="pieza" src="<?= $dir ?>/img/2.png" alt="2"></div> está encima  de la silla</span>
        </div>
        <div class="item itemdos">
            <span>El <div><img class="pieza" src="<?= $dir ?>/img/3.png" alt="1"></div> está encima  de la mesa</span>
        </div>
        <div class="item itemtres">
            <span>La <div><img class="pieza" src="<?= $dir ?>/img/4.png" alt="3"></div> está debajo  de la mesa</span>
        </div>
    </div>
    <div class="image">
        <div class="contenedor box1" alt="1"></div>
        <div class="contenedor box2" alt="2"></div>
        <div class="contenedor box3" alt="2"></div>
        <div class="contenedor box4" alt="3"></div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_0_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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
