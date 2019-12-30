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
                <div class="grid-item-a" alt="1">39<span>÷</span>3</div>
                <div class="grid-item-a" alt="2">42<span>÷</span>2</div>
                <div class="grid-item-a" alt="3">16<span>÷</span>2</div>
                <div class="grid-item-a" alt="4">77<span>÷</span>7</div>
                <div class="grid-item-a" alt="5">28<span>÷</span>2</div>
                <div class="grid-item-a" alt="6">18<span>÷</span>3</div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="370"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="1">13</div>
                <div class="grid-item-b" alt="2">21</div>
                <div class="grid-item-b" alt="3">8</div>
                <div class="grid-item-b" alt="4">11</div>
                <div class="grid-item-b" alt="5">14</div>
                <div class="grid-item-b" alt="6">6</div>
                
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
function result_tipo_3_4_19() {
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