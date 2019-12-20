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
                        <h5>El caballo de Troya</h5>
                        <p>
                            Hacía muchos años que los griegos, bajo el mando del rey Ulises, atacaban la ciudad de Troya
                            sin poder conquistarla. Entonces, Ulises tuvo una gran idea: construir rápidamente un
                            gigantesco caballo de madera para engañar a sus enemigos.
                        </p>
                        <p>
                            Por la noche, se metieron en el caballo los más valientes guerreros griegos. Y los demás, a
                            la mañana siguiente, subieron a sus naves como si se marcharan. Los troyanos se pusieron muy
                            contentos al ver que sus enemigos se retiraban.
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
                        <h5>El caballo de Troya</h5>
                        <p>
                            Pronto salieron de su ciudad y fueron apoderándose de todo lo que habían dejado los griegos.
                            Aquel enorme caballo les llamó mucho la atención y pensaron meterlo también en su ciudad
                            como si fuera un botín que hubieran conquistado al enemigo. Durante toda la noche celebraron
                            los troyanos lo que creían que era su victoria. Pero cuando estaban dormidos, Ulises y sus
                            soldados salieron del caballo y, silenciosamente, abrieron las puertas de Troya para que
                            entrasen los demás griegos que habían vuelto aprovechando la oscuridad de la noche. Así,
                            gracias a la astucia de Ulises, en muy pocas horas conquistaron lo que no habían podido
                            conseguir en muchos años.
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