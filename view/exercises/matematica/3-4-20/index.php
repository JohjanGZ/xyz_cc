<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="col l2">
            <div class="grid-option">
                <div class="pieza" alt="0,2">0,2</div>
                <div class="pieza" alt="5,9">5,9</div>
                <div class="pieza" alt="0,7">0,7</div>
                <div class="pieza" alt="39,48">39,48</div>
                <div class="pieza" alt="0,52">0,52</div>
                <div class="pieza" alt="0,60">0,60</div>
                <div class="pieza" alt="2,5">2,5</div>
                <div class="pieza" alt="3,6">3,6</div>
            </div>
        </div>
        <div class="col l10">
            <div class="grid-preguntas">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <div class="contenedor p1" alt="0,2"></div>
                    <div class="contenedor p2" alt="2,5"></div>
                    <div class="contenedor p3" alt="5,9"></div>
                </div>
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

function result_tipo_3_4_20() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>