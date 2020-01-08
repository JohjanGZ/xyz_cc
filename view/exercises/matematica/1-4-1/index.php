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
        <div class="row">
            <div class="col s4">
                <div class="img-cen">
                    <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
                </div>
            </div>
            <div class="col s8">
                <div class="grid-container">
                    <div class="grid-item-a" alt="1">1.er Primer lugar</div>
                    <div class="grid-item-a" alt="2">2.° Segundo lugar</div>
                    <div class="grid-item-a" alt="3">3.er Tercer lugar</div>
                </div>
                <div class="grid-canva">
                    <canvas id="micanvas" width="624" height="95"></canvas>
                </div>
                <div class="grid-container">
                    <div class="grid-item-b" alt="1"><img src="<?= $dir ?>/img/1.png" class="img"></div>
                    <div class="grid-item-b" alt="2"><img src="<?= $dir ?>/img/2.png" class="img"></div>
                    <div class="grid-item-b" alt="3"><img src="<?= $dir ?>/img/3.png" class="img"></div>
                </div>
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
function result_tipo_1_4_1() {
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