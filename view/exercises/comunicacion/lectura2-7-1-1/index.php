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
                    <div class="lectura lecx">
                        <h5>El ratón listo y el águila codiciosa</h5>
                        <p>
                            En lo alto de la montaña, vivía un águila que se pasaba el día mirando el horizonte en busca
                            de alimento. Una mañana, observó a un ratón que correteaba nervioso.<br>
                            Entonces, voló rápidamente y se paró junto a él. <br>
                            —¡Hola, ratón! ¿Puedo saber qué estás haciendo? ¡No paras de moverte de aquí para allá!
                        </p>
                        <p>
                            El roedor se asustó muchísimo al ver al águila frente a él, pero simuló estar tranquilo para
                            aparentar que no sentía miedo. <br>
                            —No hago nada malo. Solo estoy buscando comida para mis hijitos.<br>
                            Como ya lo tenía a su alcance, el águila le dijo sin rodeos: <br>
                            —Pues lo siento por ti, pero hoy tengo mucha hambre y voy a comerte ahora mismo.
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
                        <h5>El ratón listo y el águila codiciosa</h5>
                        <p>
                            El ratoncito sintió que un desagradable calambre recorría su cuerpo. Tenía que escapar como
                            fuera, pero sus posibilidades eran mínimas porque el águila era mucho más grande y fuerte
                            que él. Solo le quedaba un recurso para intentar salvar su vida: el ingenio. Armándose de
                            valor, sacó pecho y levantó la voz.
                        </p>
                        <p>
                            —¡Escúchame con atención, te propongo un trato! Tú no me comes y, a cambio, te doy a mis
                            ochos hijos. <br>
                            El águila se quedó pensativa unos segundos. ¡La oferta parecía bastante ventajosa para ella!
                            <br>
                            —¿A tus hijos?... ¿Y dices que son ocho? <br>
                            —¡Sí, son ocho! Yo que tú no me lo pensaba demasiado porque claramente sales ganando. ¿No te
                            parece?
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
                        <h5>El ratón listo y el águila codiciosa</h5>
                        <p>
                            —Está bien... ¡Acepto, acepto! —dijo el águila—. ¡Llévame donde están tus crías
                            inmediatamente! <br>
                            El ratón, sudando a chorros pero tratando de conservar la calma, comenzó a caminar seguido
                            por el águila, que iba pisándole los talones. Al llegar a una cuevita del tamaño de un puño,
                            le dijo: —¡Date prisa roedor que no tengo todo el día!
                        </p>
                        <p>
                            El águila permaneció quieta frente a la casa aproximadamente una hora y cansada de esperar,
                            comprendió que el ratón se había burlado de ella. Acercó el ojo al orificio y, gracias a su
                            buena vista, distinguió un profundo túnel que se comunicaba con un montón de galerías, cada
                            una en una dirección. <br>
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
                        <h5>El ratón listo y el águila codiciosa</h5>

                        <p>
                            —¡Este ratón ha huido con sus crías por uno de los pasadizos! ¡Se ha
                            burlado de mí! <br>
                            Enfadada consigo misma y avergonzada por no haber sido más lista, se lamentó: <br>
                            —¡Eso me pasa por codiciosa! ¡Tenía que haberme comido al ratón!
                        </p>
                        <p>
                            Así fue cómo el astuto ratoncito logró salvar su vida y llevarse bien lejos a su querida
                            familia, mientras que el águila tuvo que regresar a la cima de la montaña con el estómago
                            vacío.
                        </p>
                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/2.png" alt="" class="materialboxed">
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