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
                        <h5>Las cerezas del califa</h5>
                        <p>
                            Hace muchísimos años, un califa quiso conocer todo su reino y emprendió un largo viaje a
                            través del desierto. Un día llegó a una lejana ciudad. El gobernador le recibió y le ofreció
                            una canasta llena de frutos rojos y brillantes. El califa quedó encantado por el sabor de
                            aquellos frutos y preguntó cómo se llamaban.
                        </p>
                        <p>
                            ―Son cerezas, señor ―respondió el gobernador.
                        </p>
                        <p>
                            Durante los días que estuvo en aquella ciudad, el califa no paró de comer aquellas frutas
                            dulces y fresquísimas. <br>
                            Cuando llegó el momento de regresar a la capital, mandó cargar varios camellos con cerezas.
                            Pero por el camino, con el calor y el polvo del desierto, las cerezas se echaron a perder.
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
                        <h5>Las cerezas del califa</h5>
                        <p>
                            Una vez en palacio, el califa ordenó sembrar los huesos de las cerezas.
                            Pero hacía falta tiempo para que los cerezos crecieran y dieran fruto y el califa
                            entristeció.
                        </p>
                        <p>
                            Todos los habitantes de su reino pensaban que tenían que hacer algo para que el califa
                            recobre su alegría. Durante varias semanas organizaron fiestas e idearon diversiones. Pero
                            nada podía alejar la tristeza del califa.
                        </p>
                        <p>
                            Entonces los ministros decidieron mandar un emisario para informar lo que sucedía al
                            gobernador de la lejana ciudad. Y pensando, pensando, el gobernador tuvo una idea. 
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
                        <h5>Las cerezas del califa</h5>
                        <p>
                        Pensó en
                            escoger seiscientas parejas de cerezas unidas por el tallo, luego pidió que venga el
                            encargado de las palomas mensajeras.
                        </p>
                        <p>
                            Un buen día, el califa vio llegar a su palacio una bandada de seiscientas palomas. Y cada
                            una llevaba en el pico una ramita con dos cerezas. La cara del califa se iluminó. Allí
                            estaban las cerezas intactas y frescas. Ya no tendría que esperar a que sus cerezos
                            crecieran. Entonces el califa recuperó la alegría y mandó recompensar al ingenioso
                            gobernador.

                        </p>
                        <p style="text-align: right;">
                            <span style="color: blue;">(Adaptación)

                            </span>
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