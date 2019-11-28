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
                    <div class="lectura lecx">
                        <h5>La lagartija y el ciervo</h5>
                        <p>
                            Era una mañana muy calurosa en el desierto de Ghaem. Era un lugar extenso y con escasa
                            vegetación. Las únicas plantas que había eran los cactus, enormes plantas que no tenían
                            hojas y que parecían estar esperando que la naturaleza les regalara un poco de agua. La
                            arena era muy fina y parecía que de ella salían enormes lenguas de fuego por el inmenso
                            calor. En medio del paisaje, dos lagartijas tomaban sol encima de un alto muro.
                        </p>
                        <p>
                            Una de ellas dormía, debido al calor que hacía ese día. La otra estaba intentando atrapar
                            con su larga lengua los mosquitos que danzaban cerca de ella, cuando vio a un lindo ciervo
                            que pasaba por ahí. La lagartija se olvidó del banquete que los mosquitos le ofrecían y se
                            puso a admirar al ciervo, pues le llamaba la atención su elegancia al andar.
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
                        <h5>La lagartija y el ciervo</h5>
                        <p>
                            Contemplando al hermoso animal, la lagartija se sintió descontenta de su suerte y comenzó a
                            quejarse.<br>
                            —¡Qué destino tan terrible el de nosotras las lagartijas! — le dijo a su amiga—. Nadie se
                            fija en nosotras, a nadie llamamos la atención. Por el contrario, todo el mundo nos teme y
                            huye de nosotras. ¿Por qué no habré nacido ciervo?
                        </p>
                        <p>
                            De pronto, la lagartija se quedó en silencio al observar que una feroz jauría y atacaba al
                            ciervo. Este se lanzó a la fuga, pero uno de los perros consiguió saltar a su cuello; cayó
                            al suelo el ciervo, y los demás perros lo mataron.
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
                        <h5>La lagartija y el ciervo</h5>
                        <p>
                            Entonces, la segunda lagartija que había estado dormitando le dijo a la otra: — ¿Aún te
                            cambiarías por ese ciervo? Todo el que sobresale en algo tiene muchos enemigos. Yo creo que
                            vivir modestamente, ignorado del mundo, tiene también sus ventajas.
                        </p>
                        <p>
                            Y así, la segunda lagartija volvió a cerrar los ojos y siguió durmiendo mientras tomaba el
                            sol del mediodía. <br>
                            La lagartija, que primero había hablado, se quedó pensativa y callada. Se tragó una mosca
                            que se puso a su alcance y, de pronto, se sintió muy contenta con su suerte, ya que podía
                            reposar tranquila, en lo alto de un muro, dándose ricos banquetes de mosquitos y de moscas,
                            sin tener enemigos ni nadie que le envidiara.
                        </p>
                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/3.png" alt="" class="materialboxed">
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>