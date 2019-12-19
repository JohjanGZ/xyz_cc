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
                    <li class="tab col s4 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s4"><a href="#test-swipe-2">Parte 2</a></li>

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Las uvas y el ¡ay!</h5>
                        <p>
                            Tenía un caballero un criado nuevo, un mozo llamado Pedro que parecía un poco tonto.
                            Para burlarse de él, le dio dos monedas y le dijo: <br>
                            —Pedro, vete al mercado y cómprame una moneda de uvas y otra de ¡ay!
                        </p>
                        <p>
                            El pobre mozo compró las uvas, pero cada vez que pedía una moneda de ¡ay! todos se reían y
                            burlaban de él.
                        </p>
                        <p>

                            Al darse cuenta de la burla de su amo, puso las uvas en el fondo de una bolsa y sobre las
                            uvas un manojo de ortigas.
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
                        <h5>Las uvas y el ¡ay!</h5>
                        <p>
                            Cuando regresó a su casa, le dijo su amo: <br>
                            —¿Lo traes todo?
                        </p>
                        <p>
                            Contestó el mozo: <br>
                            —Sí, señor, está todo en la bolsa.
                        </p>
                        <p>
                            El caballero extrañado metió rápidamente la mano dentro de la bolsa y al tocar las ortigas,
                            exclamó: <br>
                            —¡Ay!
                        </p>
                        <p>
                            A lo que dijo el mozo: <br>
                            —Debajo están las uvas, señor.
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