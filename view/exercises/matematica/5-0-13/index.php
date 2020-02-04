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
        Sean los conjuntos N={t, u} y P={u, w, y}
        </p>
        <div class="vertical">
            <div class="grid-container" style="border-color: red;">
                <div class="grid-item-a" alt="x"><span>•t</span></div>
                <div class="grid-item-a" alt="x"><span>•u</span></div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="307"></canvas>
            </div>
            <div class="grid-container" style="border-color: blue;">
                <div class="grid-item-b" alt="x"><span>•u</span></div>
                <div class="grid-item-b" alt="x"><span>•w</span></div>
                <div class="grid-item-b" alt="x"><span>•y</span></div>
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
function result_tipo_5_0_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r >= 21) {
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