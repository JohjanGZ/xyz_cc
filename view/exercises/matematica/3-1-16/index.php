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
                <div class="grid-item-a" alt="1">27 <span>x</span> 10</div>
                <div class="grid-item-a" alt="2">27 <span>x</span> 1000</div>
                <div class="grid-item-a" alt="3">27 <span>x</span> 100</div>
                <div class="grid-item-a" alt="4">601 <span>x</span> 100</div>
                <div class="grid-item-a" alt="5">601 <span>x</span> 1000</div>
                <div class="grid-item-a" alt="6">601 <span>x</span> 10</div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="370"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="1">270</div>
                <div class="grid-item-b" alt="2">27 000</div>
                <div class="grid-item-b" alt="3">2 700</div>
                <div class="grid-item-b" alt="4">60 100</div>
                <div class="grid-item-b" alt="5">601 000</div>
                <div class="grid-item-b" alt="6">6 010</div>
                
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
function result_tipo_3_1_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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