<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="pincel">
        <div>
            <img src="<?=$dir?>/img/1.png" class="img " alt="El" value="1">
        </div>
        <div>
            <img src="<?=$dir?>/img/2.png" class="img " alt="Lo" value="2">
        </div>
        <div>
            <img src="<?=$dir?>/img/3.png" class="img " alt="La" value="3">
        </div>
    </div>
    <div class="contenedor">
        <div class="content">
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/11.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/7.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/6.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/9.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/7.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/9.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/11.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/6.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/6.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/10.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/7.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/5.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/5.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="ooo" forma="">
                <img src="<?= $dir ?>/img/10.png" alt="">
            </div>
            <div class="item seleccion box lista" alt="n" forma="">
                <img src="<?= $dir ?>/img/8.png" alt="">
            </div>
        </div>
    </div>
</div>
</section>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Respuesta correcta</h4>
        <center>
            <img class="materialbox listaed" width="80%" src="<?= $dir ?>/img/respuesta.png">
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
function result_tipo_5_0_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 13) {
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