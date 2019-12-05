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
                        <h5>Las ranitas y el tronco tallado</h5>
                        <p>
                            Había una vez una familia de ranitas que vivía muy feliz en un lago. Sin embargo, ellas
                            tenían mucho miedo de un tronco tallado que estaba situado en la orilla. A las ranitas les
                            gustaba mucho las fiestas y eran muy divertidas, pero sentían mucho respeto por el tronco.
                        </p>
                        <p>
                            En muchas oportunidades no hacían fiestas para evitar hacer ruido y molestarlo.
                            Ellas pensaban que el tronco era el monumento de alguna tribu que ya no habitaba ese lugar,
                            pero como no se atrevían a acercarse a él para ver bien de qué se trataba, solo podían
                            suponer y observar de lejos su rostro serio, que inspiraba autoridad.
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
                        <h5>Las ranitas y el tronco tallado</h5>
                        <p>
                            Un día muy tormentoso y con horribles truenos, el tronco cayó al lago y en ese instante las
                            ranitas se dieron cuenta que era solo un tronco tallado que no podía hacerles daño.
                        </p>
                        <p>
                            Así, comenzaron a reírse de los temores por los que habían pasado y empezaron a jugar con
                            él.
                        </p>
                        <p>
                            <span style="color: #37d3f7;">Moraleja: </span> Lo que por ignorancia atemoriza, a veces es
                            solo digno de risa.
                        </p>

                        <p style="text-align: right;">
                        La Fontaine
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