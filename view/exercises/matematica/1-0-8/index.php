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
                    <img alt="1-1" src="<?= $dir ?>/img/1-1.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="1-2" src="<?= $dir ?>/img/1-2.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="2-1" src="<?= $dir ?>/img/2-1.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="2-2" src="<?= $dir ?>/img/2-2.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="3-1" src="<?= $dir ?>/img/3-1.png">
                </div>
            </div>
            <div class="grid-item">
                <div class="figura-2">
                    <img alt="3-2" src="<?= $dir ?>/img/3-2.png">
                </div>
            </div>
        </div>
    </center>
    <section id="contenedorpuzzle">
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="p-img">
                <div class="figura p" alt="1-1"></div>
                <div class="figura p" alt="1-2"></div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="p-img">
                <div class="figura p" alt="2-1"></div>
                <div class="figura p" alt="2-2"></div>
                <div class="figura p" alt="2-1"></div>
                <div class="figura p" alt="2-2"></div>
                <div class="figura p" alt="2-1"></div>
                <div class="figura p" alt="2-2"></div>
                <div class="figura p" alt="2-1"></div>
                <div class="figura p" alt="2-2"></div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png" class="p-img">
                <div class="figura p" alt="3-1"></div>
                <div class="figura p" alt="3-2"></div>
                <div class="figura p" alt="3-1"></div>
                <div class="figura p" alt="3-2"></div>
                <div class="figura p" alt="3-1"></div>
                <div class="figura p" alt="3-2"></div>
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
function result_tipo_1_0_8() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 16) {
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