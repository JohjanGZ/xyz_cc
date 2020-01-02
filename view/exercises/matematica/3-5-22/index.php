<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="grid-img">
        <span>a.</span>
        <img src="<?=$dir?>/img/1.png" class="principal materialboxed">
        <span>b.</span>
        <img src="<?=$dir?>/img/2.png" class="principal materialboxed">
        <span>c.</span>
        <img src="<?=$dir?>/img/3.png" class="principal materialboxed">
    </div>
    <div class="grid-container">
        <div class="seleccion">
            <span>a.</span> Las fracciones a y b son equivalentes.
        </div>
        <div class="seleccion">
            <span>b.</span> Las fracciones b y c son equivalentes
        </div>
        <div class="seleccion" alt="n">
            <span>c.</span> Las fracciones a y c son equivalentes.
        </div>
        <div class="seleccion">
            <span>d.</span> Ninguna de las fracciones anteriores son equivalentes.
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

function result_tipo_3_5_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
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