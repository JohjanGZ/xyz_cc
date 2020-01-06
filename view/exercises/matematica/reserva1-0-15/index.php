<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container">
    <center>
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="p-img">
                <div class="figura">
                    <img alt="1" src="<?= $dir ?>/img/triangulo.png" class="">
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="p-img">
                <div class="figura">
                    <img alt="2" src="<?= $dir ?>/img/cuadrado.png" class="">
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png" class="p-img">
                <div class="figura">
                    <img alt="3" src="<?= $dir ?>/img/circulo.png" class="">
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="p-img">
                <div class="figura">
                    <img alt="4" src="<?= $dir ?>/img/rombo.png" class="">
                </div>
            </div>
        </div>
    </center>
    <section id="contenedorpuzzle">
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="2" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="3" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="4" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="1" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="2" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="4" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="1" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="4" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="2" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="3" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="1" style="width: 100%; height: 100%;"></div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="p-img">
                <div class="figura p">
                    <div class="img" alt="4" style="width: 100%; height: 100%;"></div>
                </div>
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
function result_tipo_1_0_7() {

    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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