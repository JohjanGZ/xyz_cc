<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container">
    <center>
        <div class="grid-container-2">
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="lo" src="img/4/circulo.gif">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="do" src="img/4/cuadrado.gif">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="tan" src="img/4/rectangulo.gif">
                </div>
            </div>
        </div>
    </center>
    <section id="contenedorpuzzle">
        <div class="grid-container">
            <div class="grid-item">
                <img src="img/4/image.png" class="p-img">
                <div class="figura p" alt="lo"></div>
                <div class="figura p" alt="do"></div>
                <div class="figura p" alt="lo"></div>
                <div class="figura p" alt="tan"></div>
            </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">

var r = 0;
var forma = "";
$('.figura-2 img').click(function() {
    forma = $(this).attr('alt');
    img = $(this).attr('src');
    // Estilos a span
    $('.figura-2 img').css({ "box-shadow": "none", "background": "transparent" });
    $(this).css({ "box-shadow": "0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)", "background": "transparent" });

});
$('.p').click(function() {
    console.log(img);
    $(this).css({ "background-image": "url(" + img + ")", "background-size": "contain", "background-repeat": "no-repeat", "background-position": "center" });
    if ($(this).attr("alt") == forma) {
        if ($(this).text() == "") {
            r++;
        } else {
            if ($(this).text() != $(this).attr("alt")) {
                r = r + 2;
            }
        }
    } else {
        if ($(this).text() == "") {
            r--;
        } else {
            if ($(this).text() == $(this).attr("alt")) {
                r = r - 2;
            }
        }
    }
    $(this).text(forma);
    // console.log(letra);
    console.log(r);
});

function result_tipo_2_0_24() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
        console.log(r)
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);

    }
}
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>