<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="col l4">
            <div class="grid-option">
                <div class="pieza" alt="70">70</div>
                <div class="pieza" alt="700">700</div>
                <div class="pieza" alt="7000">7 000</div>
                <div class="pieza" alt="700">700</div>
            </div>
        </div>
        <div class="col l8">
            <div class="contenedor-img">
                <img src="<?=$dir?>/img/principal.png" class="principal">
                <div class="contenedor p1" alt="70"></div>
                <div class="contenedor p2" alt="700"></div>
                <div class="contenedor p3" alt="700"></div>
                <div class="contenedor p4" alt="7000"></div>
            </div>
        </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_3_1_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>