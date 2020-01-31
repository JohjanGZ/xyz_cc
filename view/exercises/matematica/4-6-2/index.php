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
        <div class="grid">
            <div class="secuencia">
                <img src="<?=$dir?>/img/1.png" class="img">
                <div class="op op1">+4</div>
                <div class="op op2">+4</div>
                <div class="op op3">+4</div>
                <div class="op op4">+4</div>
                <div class="op op5">+4</div>
                <div class="contenedor p1" alt="28"></div>
            </div>
            <div class="option">
                <div class="pieza" alt="">2</div>
                <div class="pieza" alt="">4</div>
                <div class="pieza" alt="">8</div>
                <div class="pieza" alt="">40</div>
                <div class="pieza" alt="">12</div>
                <div class="pieza" alt="">14</div>
                <div class="pieza" alt="">13</div>
                <div class="pieza" alt="">18</div>
                <div class="pieza" alt="28">28</div>
                <div class="pieza" alt="">22</div>
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
function result_tipo_4_6_2() {
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