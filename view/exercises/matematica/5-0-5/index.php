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
                <div class="grid-item-a" alt="uno"><span><span class="uno">U</span> = { x/x es un día de la semana } </span></div>
                <div class="grid-item-a" alt="dos"><span><span class="dos">U</span> = { x/x es un letra del abecedario }</span></div>
                <div class="grid-item-a" alt="tres"><span style="display: flex;"><span class="tres">U</span> = <img src="<?= $dir ?>/img/1.png" alt=""></span></div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="307"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="dos"><span>A = { X/X es una letra de la palabra "lapicero" }</span></div>
                <div class="grid-item-b" alt="tres"><span>B = { 1; 3; 5; 10; 12 }</span></div>
                <div class="grid-item-b" alt="uno"><span>c = { martes, miércoles }</span></div>
                <div class="grid-item-b" alt="tres"><span>D = { 5; 10; 15; .. }</span></div>
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
function result_tipo_5_0_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>