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
                    <li class="tab col s4"><a href="#test-swipe-3">Parte 3</a></li>

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El ratón del granero</h5>
                        <p>
                            Había una vez un ratón que vivía debajo de un granero. Las tablas que formaban el suelo del
                            granero tenían un pequeño agujero por el que, uno tras otro, los granos de trigo caían poco
                            a poco a la madriguera. De ese modo, el ratón vivía feliz y contento porque siempre estaba
                            muy bien alimentado.
                        </p>
                        <p>
                            Después de mucho tiempo de vivir así, comenzó a pensar que debía presumir con sus amigos lo
                            bien que le iba, pues no debía esforzarse para conseguir alimentos.
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
                        <h5>El ratón del granero</h5>
                        <p>
                            Entonces se puso a roer la madera del granero para agrandar el agujero, de tal modo que
                            pudiesen caer más granos en su madriguera.
                        </p>
                        <p>
                            Así podría invitar a sus amigos y guardar la comida sobrante en un lugar seguro, asegurando
                            con eso su alimentación por mucho tiempo. Hecho esto, corrió en busca de los demás ratones
                            de los alrededores y los invitó a una fiesta en su granero.
                        </p>

                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/2.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El ratón del granero</h5>
                        <p>
                            Vengan todos a mi casa –les decía–, que les voy a invitar a comer. Pero cuando llegaron los
                            invitados, y quiso el ratón llevarlos hasta el agujero del granero, ya no había ningún
                            agujero en las tablas, y en la madriguera no se veía ni un solo
                            grano.
                        </p>
                        <p>
                            El gran tamaño del agujero, que el ratón había abierto en el suelo del granero, llamó la
                            atención del granjero. Y este lo había tapado, clavándole una tabla.
                        </p>
                        <p style="text-align: right;">
                            Adaptación.
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