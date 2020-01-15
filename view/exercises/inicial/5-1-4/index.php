<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="pincel">
        <div>
            <img src="<?=$dir?>/img/2.png" class="img colores" alt="1" tamano="00001" value="120">
        </div>
        <div>
            <img src="<?=$dir?>/img/3.png" class="img colores" alt="2" tamano="3" value="180">
        </div>
    </div>
    <div class="contenedor">
        <div class="item">
            <img src="<?= $dir ?>/img/1.png">
            <div class="box lista imd" alt="2"></div>
            <div class="box lista imd" alt="1"></div>
            <div class="box lista imd" alt="2"></div>
            <div class="box lista imd" alt="1"></div>
            <span class="lineTest line1"></span>
            <span class="lineTest line2"></span>
            <span class="lineTest line3"></span>
            <span class="lineTest line4"></span>
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
function result_tipo_5_1_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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