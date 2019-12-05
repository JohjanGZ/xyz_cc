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
                        <h5>El astrónomo</h5>
                        <p>
                            En un país muy lejano, donde la ciencia era muy importante para sus habitantes, había un
                            anciano astrónomo al que le gustaba realizar el mismo recorrido todas las noches para
                            observar las estrellas.
                        </p>
                        <p>
                            Un día uno de sus viejos colegas le dijo que había aparecido un extraño astro en el cielo.
                            El anciano salió de la ciudad para poder verlo con sus propios ojos. Muy emocionado estaba
                            el astrónomo mirando al cielo, tanto que no se dio cuenta de que a pocos pasos de él había
                            un agujero. Cuando se cayó dentro del mismo, comenzó a gritar pidiendo ayuda.
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
                        <h5>El astrónomo</h5>
                        <p>
                        Cerca de ahí pasaba un hombre. Al escuchar los gritos se acercó para ver lo que sucedía.
                        </p>
                        <p>
                        Al darse cuenta de lo que había ocurrido, le dijo al anciano: “Te ayudaré a salir de ahí, pero ten mucho cuidado la próxima vez. Cuando salgas por un lugar que desconoces, tienes que estar muy atento por donde caminas ya que te puedes encontrar con cualquier cosa en el suelo”.
                        </p>
                        <p>
                        <span style="color: #37d3f7;">Moraleja: </span> Antes de lanzarse a la aventura, hay que conocer el lugar por el que se transitará.
                        </p>

                        <p style="text-align: right;">
                        Esopo
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