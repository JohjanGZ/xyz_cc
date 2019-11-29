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
                    <div class="lectura lecx">
                        <h5>Un vestido para dos</h5>
                        <p>
                            Alicia y Micaela eran gemelas y les gustaba vestirse siempre iguales. Una tarde, la fuerza
                            del viento desprendió uno de los dos vestidos rosados que su mamá puso a secar al sol. No se
                            sabía quién era la dueña del vestido pues sus padres siempre adquirían ropas iguales. Lo que
                            es peor, el sábado siguiente irían a una fiesta y ambas querían usar su vestido rosado.
                        </p>
                        <p>
                            Cuando su mamá les contó lo ocurrido, empezó la discusión por saber quién era la dueña del
                            vestido que quedaba y lo usaría para asistir al cumpleaños de su pequeño amigo. <br>
                            ¿Cómo solucionar este problema? Era la pregunta que se hacían sus padres. Hablaron con
                            ellas, les hicieron ver que una de las dos tenía que ceder, les recordaron el cariño que
                            debe existir entre hermanas y que un simple vestido no tenía porque separarlas.
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
                        <h5>Un vestido para dos</h5>
                        <p>
                            Ambas dijeron que sí y cedieron el vestido. Así, todos se fueron a dormir muy contentos.
                            <br>
                            Esa noche, Micaela caminaba muy despacio hacia el ropero cuando tropezó con un bulto que se
                            movía rápidamente. <br>
                            Prendió la luz y vio a su hermana Alicia tratando de esconder el vestido así que fue al
                            dormitorio de sus padres y les contó lo sucedido.
                        </p>
                        <p>
                            A la mañana siguiente, Micaela amaneció con dolor de estómago y le pidió a su mamá que no la
                            llevara al colegio pues se sentía mal. Por la tarde, cuando Alicia llegó de la escuela, lo
                            primero que hizo fue correr hacia la canasta donde dormía el gato, levantó el pequeño
                            almohadón y no encontró el vestido rosado; su hermana lo había escondido.
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
                        <h5>Un vestido para dos</h5>
                        <p>
                            Era la primera vez que las gemelas tenían una riña. A la hora de acostarse, ninguna de las
                            dos pudo dormir por estar pendiente de los movimientos de la otra. Su mamá se molestó con
                            ellas, las castigó y les dijo que iba a regalar el vestido; y así lo hizo. <br>
                            Como las gemelas permanecían sin hablar entre ellas; sus padres decidieron hablar con las
                            dos para recordarles que un vestido, por muy bonito que fuera, no debía ser la causa del
                            distanciamiento entre hermanas.
                        <br>
                            Las gemelas se perdonaron mutuamente y se dieron un largo abrazo. De pronto; sonó el timbre
                            de la puerta; era don Toño, uno de sus vecinos, que llevaba en la mano el vestido perdido y
                            les dijo: Recién hoy pude venir a traerles este vestido, el aire que hubo en días pasados
                            fue a dejarlo a mi casa.
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