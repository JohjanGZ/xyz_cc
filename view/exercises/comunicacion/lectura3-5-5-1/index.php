<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">

        <div class="row">
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Parte 2</a></li>
                    <li class="tab col s3"><a href="#test-swipe-3">Parte 3</a></li>
                    <li class="tab col s3"><a href="#test-swipe-4">Parte 4</a></li>

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Décima al limón</h5>
                        <p>
                            De las frutas del solar, <br>
                            no hay una como el limón, <br>
                            que tenga la condición <br>
                            de lucir y de curar. <br>
                            Muy buena para aplacar <br>
                            la sed dura y rigurosa. <br>
                            La limonada sabrosa <br>
                            hecha de azúcar o miel <br>
                            que penetra hasta la piel, <br>
                            con su frescura aromosa.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Décima al limón</h5>
                        <p>
                            Su blanca flor de azahar<br>
                            llena el patio de ternura,<br>
                            en las noches más oscuras<br>
                            cuando comienza a florear.<br>
                            Las frutas, al madurar,<br>
                            con su amarillo esplendor,<br>
                            entre el frondoso, verdor,<br>
                            parecen soles chiquitos.<br>
                            Palo de limón viejito.<br>
                            perfumado y paridor.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Décima al limón</h5>
                        <p>
                            Es su hoja medicina;<br>
                            su jugo, desinfectante;<br>
                            también sirve de purgante,<br>
                            y contiene vitamina.<br>
                            El limón es una mina<br>
                            sí se le sabe cuidar;<br>
                            al niño se debe dar,<br>
                            a la mujer, al anciano.<br>
                            Debe estar siempre a la mano,<br>
                            en casa, nunca faltar.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-4" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Décima al limón</h5>
                        <p>
                            Se usa como alimento,<br>
                            también en la dulcería;<br>
                            una buena chicha fría<br>
                            de limón es un contento,<br>
                            Y les repito: no es un cuento<br>
                            sirve en cualquier situación<br>
                            para bajar la presión,<br>
                            y hasta para echarse un trago.<br>
                            Por eso un verso le hago<br>
                            a la fruta del limón.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/1.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

<script>
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});
</script>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>