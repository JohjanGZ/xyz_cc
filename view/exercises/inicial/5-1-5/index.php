<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="pincel">
        <div class="img punto red colores" alt="d" value="d83535" letra="D">
            D
        </div>
        <div class="img punto blue colores" alt="i" value="4b6af3" letra="I">
            I
        </div>
    </div>
    <div class="contenedor aleatorio">
        <div class="item">
            <img src="<?= $dir ?>/img/1.png" alt="">
            <div class="box lista imd" alt="I"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/2.png" alt="">
            <div class="box lista imd" alt="D"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/1.png" alt="">
            <div class="box lista imd" alt="I"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/2.png" alt="">
            <div class="box lista imd" alt="D"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/1.png" alt="">
            <div class="box lista imd" alt="I"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/2.png" alt="">
            <div class="box lista imd" alt="D"></div>
        </div>
    </div>
</div>
</section>
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
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_5_1_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>