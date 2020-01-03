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
                        <h5>La princesa Huacachina</h5>
                        <p>
                            En tiempos antiguos, vivía en Ica un poderoso Señor que gobernaba a su pueblo con gran
                            sabiduría, generosidad y bondad. Su hija, una joven de larga cabellera de color negro y ojos
                            de color verde, tenía un gran amor, un joven guerrero iqueño, quien era su prometido.
                        </p>
                        <p>
                            El joven guerrero se había marchado a combatir contra los Chinchas debido a una sublevación
                            en contra del Inca. Un día llegó uno de los guerreros de nombre Ukañán, traía la noticia de
                            la derrota del ejército y de la muerte del joven conductor de las fuerzas.
                            <br>
                            Cuando la joven princesa recibió la triste noticia, salió desesperada de su casa, atravesó
                            las chacras, cruzó los cerros y llegó hasta a las dunas de arena.
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
                        <h5>La princesa Huacachina</h5>
                        <p>
                            Quería estar sola para llorar la pérdida de su valiente amado; sin embargo, alguien la
                            seguía sigilosamente, era Ukañán. Ukañán era un joven guerrero que estaba enamorado de la
                            princesa y había mentido para aprovechar que su prometido se encontraba lejos y así poder
                            conquistarla.
                        </p>
                        <p>
                            Después de tanto llorar, se dedicó a peinar su larga cabellera al pie de un robusto
                            huarango, utilizando el agua de lluvia que un hoyo había empozado. Cuando notó que estaba
                            oscureciendo, decidió regresar al palacio. Sacó un espejo y empezó a secar sus ojos
                            llorosos, en ese momento se percató de la figura de Ukañán, quien se aproximaba
                            sigilosamente hacia ella.
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
                        <h5>La princesa Huacachina</h5>
                        <p>
                            No pudo contener su angustia y empezó a correr, pero al sentir que su perseguidor la
                            alcanzaba, soltó el espejo y elevó los brazos al cielo clamando ayuda a la diosa Luna:

                        </p>
                        <p>
                            ― ¡Huaca Shinam!, ¡Huaca Shinam! (¡Sagrada Luna!, ¡Sagrada Luna!).
                        </p>
                        <p>
                            La diosa Luna convirtió en laguna el espejo que la princesa había dejado caer, hizo que la
                            joven cayera en ella y desapareciera entre las aguas.
                        </p>
                        <p>

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
                        <h5>La princesa Huacachina</h5>
                        <p>
                            Días después, el ejército regresó triunfante al mando del prometido de la princesa, quien
                            enterado de lo ocurrido salió apresurado hacia la laguna, al llegar apreció cómo su amada
                            emergía de las aguas y lo recibía con los brazos abiertos.
                            Ella lo condujo hacia el fondo de la laguna para que pudieran vivir juntos para siempre.

                        </p>
                        <p>
                            Desde entonces, ella sale en las noches de Luna a cantarle a la Huaca Shinam y cada año le
                            ofrece, en sacrificio, un forastero que ha muerto ahogado en sus verdes aguas.
                        </p>
                        <p style="text-align:right;color:cornflowerblue;">
                            (Adaptación)
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