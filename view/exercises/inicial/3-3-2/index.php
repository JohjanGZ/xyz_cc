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
        <div class="lista">
            <div class="pieza" alt=""><img src="<?=$dir?>/img/o1.png" class="img"></div>
            <div class="pieza" alt="1"><img src="<?=$dir?>/img/o2.png" class="img"></div>
            <div class="pieza" alt="2"><img src="<?=$dir?>/img/o3.png" class="img"></div>
            <div class="pieza" alt="2"><img src="<?=$dir?>/img/o3.png" class="img"></div>
        </div>
        <div class="grid-container">
            <div class="item">
                <span>•</span> La
                <img src="<?=$dir?>/img/1.png" class="principal">
                se golpea la
                <img src="<?=$dir?>/img/2.png" class="principal">
                <div class="option">
                    <div class="contenedor" alt="1"></div>
                </div>
            </div>
            <div class="item">
                <span>•</span> El
                <img src="<?=$dir?>/img/3.png" class="principal">
                viaja en
                <img src="<?=$dir?>/img/4.png" class="principal">
                <div class="option">
                    <div class="contenedor" alt="2"></div>
                </div>
            </div>
            <div class="item">
                <span>•</span> Los
                <img src="<?=$dir?>/img/5.png" class="principal">
                comen
                <img src="<?=$dir?>/img/6.png" class="principal">
                <div class="option">
                    <div class="contenedor" alt="2"></div>
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

function result_tipo_3_3_2() {
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