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

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Un conejo en la carretera</h5>
                        <p>
                            Daniel se reía dentro del auto de su papá por las ocurrencias que hacía su hermano menor,
                            Carlos. Iban de paseo con sus padres al lago. Allí irían a nadar en sus tibias aguas y
                            volarían sus nuevas cometas. Sería un día de paseo inolvidable. De pronto, el coche se
                            detuvo con un brusco frenazo. <br>
                            Daniel oyó a su padre exclamar en voz alta: <br>
                            –¡Oh, mi Dios, lo he atropellado! <br>
                            –¿A quién, a quién? –le preguntó Daniel. <br>
                            –No se preocupen –respondió su padre–. No es nada. <br>
                            El auto inició su marcha de nuevo y la madre de los chicos encendió la radio. Empezó a sonar
                            una canción de moda en los altavoces. <br>
                            –Cantemos esta canción –dijo mirando a los niños en el asiento de atrás.
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
                        <h5>Un conejo en la carretera</h5>
                        <p>

                            La mamá comenzó a tararear una canción, pero Daniel miró por la ventana trasera y vio,
                            tendido sobre la carretera, el cuerpo de un conejo. <br>
                            –¡Para el carro, papá! –gritó Daniel–. Por favor, detente. <br>
                            –¿Para qué? –respondió su padre. <br>
                            –¡El conejo! –le dijo–. ¡El conejo está allí en la carretera y está herido! <br>
                            –Dejémoslo –dijo la madre–. Es solo un animal. <br>
                            –¡No, no, para, para el auto! <br>
                            –Sí, papi, no sigas –añadió Carlitos–. Debemos recogerlo y llevarlo al hospital de
                            animales.<br>
                            Los dos niños estaban muy preocupados y tristes. <br>
                            –Bueno, está bien –dijo el padre dándose cuenta de su error.
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
                        <h5>Un conejo en la carretera</h5>
                        <p>
                            Y dando la vuelta, recogieron al conejo herido.
                            <br>
                            Pero al reiniciar su viaje, fueron detenidos un poco más adelante por una patrulla de la
                            policía, que les informó que una gran roca había caído sobre la carretera por donde iban,
                            cerrando el paso. Al enterarse de la emergencia, todos ayudaron a los policías a retirar la
                            roca. <br>
                            Gracias a la solidaridad de todos, pudieron dejar el camino libre y llegar a tiempo al
                            veterinario,
                            que curó la pata del conejo. Los padres de Daniel y Carlos aceptaron llevarlo a su casa
                            hasta que
                            estuviera completamente sano. <br>
                            Unas semanas después, toda la familia fue a dejar al conejito de nuevo en el bosque. Carlos
                            y
                            Daniel le dijeron adiós con pena, pero sabiendo que sería más feliz en libertad.
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