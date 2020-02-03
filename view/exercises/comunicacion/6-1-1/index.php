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
        <div class="vertical">
            <div class="grid-container">
                <div class="grid-item-a" alt="1">La corteza prefrontal.</div>
                <div class="grid-item-a" alt="2">El prejuicio de impacto.</div>
                <div class="grid-item-a" alt="3">Sintetizar la felicidad.</div>
                <div class="grid-item-a" alt="4">La felicidad.</div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="340"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="4">es un asunto de química del cerebro.</div>
                <div class="grid-item-b" alt="3">es crear la propia felicidad.</div>
                <div class="grid-item-b" alt="2">es aquel que te hace creer que una situación será peor de lo que en verdad puede ser...</div>
                <div class="grid-item-b" alt="1">es un simulador de experiencias.</div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
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
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_6_1_1() {
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