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
        <p style="font-size: 1.6rem;font-weight:600;width:100%;text-align:center;margin-bottom: 0;">
        Sean los conjuntos N={5; 6; 7; 8} y M={18; 19; 21; 24}
        </p>
        <div class="vertical">
            <div class="grid-container m" style="border-color: red;">
                <div class="grid-item-a" alt="uno"><span>•18</span></div>
                <div class="grid-item-a" alt="x"><span>•19</span></div>
                <div class="grid-item-a" alt="dos"><span>•21</span></div>
                <div class="grid-item-a" alt="tres"><span>•24</span></div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="307"></canvas>
            </div>
            <div class="grid-container n" style="border-color: blue;">
                <div class="grid-item-b" alt="xx"><span>•5</span></div>
                <div class="grid-item-b" alt="uno"><span>•6</span></div>
                <div class="grid-item-b" alt="dos"><span>•7</span></div>
                <div class="grid-item-b" alt="tres"><span>•8</span></div>
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
function result_tipo_5_0_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r >= 3) {
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