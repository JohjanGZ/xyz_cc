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
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Las mañanitas</h5>
                        <p>
                            En las mañanitas <br>
                            del mes de mayo<br>
                            cantan los ruiseñores,<br>
                            retumba el campo.
                        </p>
                        <p>
                            En las mañanitas,<br>
                            como son frescas,<br>
                            cubren los ruiseñores<br>
                            las alamedas.
                        </p>
                        <p>
                            Ríense las fuentes <br>
                            tirando perlas <br>
                            a las florecillas <br>
                            que están más cerca. <br>
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
                        <h5>Las mañanitas</h5>
                        <p>
                            Vístense las plantas <br>
                            de varias sedas <br>
                            que sacar colores <br>
                            poco les cuesta.
                        </p>
                        <p>
                            Los campos alegran <br>
                            tapetes varios, <br>
                            cantan los ruiseñores, <br>
                            retumba el campo.
                        </p>
                        <p style="text-align: right;">
                           Lope de Vega
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