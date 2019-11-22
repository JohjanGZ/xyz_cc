<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container">
    <center>
        <div class="img-principal">
            <img src="<?= $dir ?>/img/1.png" class="p-img">
            <img src="<?= $dir ?>/img/1.png" class="p-img">
            <img src="<?= $dir ?>/img/1.png" class="p-img">
            <img src="<?= $dir ?>/img/2.png" class="p-img">
        </div>
    </center>
    <section id="contenedorpuzzle">
        <div class="row">
            <div><div class="item" id="item1">1</div></div>
            <div><div class="item" id="item2">2</div></div>
            <div><div class="item" id="item1" alt="n">3</div></div>
            <div><div class="item" id="item2">4</div></div>
            <div><div class="item" id="item1">5</div></div>
            <div><div class="item" id="item2">6</div></div>
            <div><div class="item" id="item2">7</div></div>
        </div>
        <div class="row center recibidor" id="recibidor">
        </div>
    </section>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <center>
            <h4>Respuesta correcta</h4>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
function result_tipo_1_0_2() {

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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>