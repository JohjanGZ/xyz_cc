<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="pincel">
        <div>
            <img src="<?=$dir?>/img/10.jpg" class="img colores" alt="El" value="#00cc66">
        </div>
        <div>
            <img src="<?=$dir?>/img/11.jpg" class="img colores" alt="La" value="#51b9ff">
        </div>
    </div>
    <div class="contenedor">
        <div class="item">
            <img src="<?= $dir ?>/img/1.png" alt="">
            <div class="box lista" alt="El"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/2.png" alt="">
            <div class="box lista" alt="La"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/3.png" alt="">
            <div class="box lista" alt="La"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/4.png" alt="">
            <div class="box lista" alt="La"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/5.png" alt="">
            <div class="box lista" alt="La"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/6.png" alt="">
            <div class="box lista" alt="La"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/7.png" alt="">
            <div class="box lista" alt="El"></div>
        </div>
        <div class="item">
            <img src="<?= $dir ?>/img/8.png" alt="">
            <div class="box lista" alt="El"></div>
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
function result_tipo_5_0_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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