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
                <div class="grid-item-a" alt="prosa"><img src="<?=$dir?>/img/1.png" class="img"></div>
                <div class="grid-item-a" alt="verso"><img src="<?=$dir?>/img/2.png" class="img"></div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="307"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="verso"><img src="<?=$dir?>/img/3.png" class="img"></div>
                <div class="grid-item-b" alt="prosa"><img src="<?=$dir?>/img/4.png" class="img"></div>
                <div class="grid-item-b" alt="prosa"><img src="<?=$dir?>/img/5.png" class="img"></div>
                <div class="grid-item-b" alt="verso"><img src="<?=$dir?>/img/6.png" class="img"></div>
                <div class="grid-item-b" alt="verso"><img src="<?=$dir?>/img/7.png" class="img"></div>
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
function result_tipo_5_0_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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