<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <div class="box lista box1" alt="e"></div>
        <div class="box lista box2" alt="a"></div>
        <div class="box lista box3" alt="a"></div>
        <div class="box lista box4" alt="o"></div>
        <div class="box lista box5" alt="o"></div>
        <div class="box lista box6" alt="a"></div>
        <div class="box lista box7" alt="a"></div>
        <div class="box lista box8" alt="a"></div>
        <div class="box lista box9" alt="a"></div>
        <div class="box lista box10" alt="a"></div>
        <div class="box lista box11" alt="o"></div>
    </div>
    <div class="pincel">
        <div class="item colores a" value="#778beb" alt="a">a</div>
        <div class="item colores e" value="#f3a683" alt="e">e</div>
        <div class="item colores i" value="#e77f67" alt="i">i</div>
        <div class="item colores o" value="#63cdda" alt="o">o</div>
        <div class="item colores u" value="#cf6a87" alt="u">u</div>
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
function result_tipo_5_0_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 11) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
        console.log(r);
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
        console.log(r);
    }

}
</script>