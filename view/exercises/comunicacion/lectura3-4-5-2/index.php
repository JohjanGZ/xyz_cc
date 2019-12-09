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
                        <h5>La leyenda de las cebollas</h5>
                        <p>
                            Había una vez un huerto lleno de hortalizas, árboles frutales y toda clase de plantas.
                            Pero un buen día empezaron a crecer unas cebollas especiales.
                        </p>
                        <p>
                            Cada una tenía un color diferente: rojo, amarillo, naranja, morado. Descubrieron que cada
                            cebolla tenía, en el mismo corazón (porque también las cebollas tienen su propio corazón),
                            una piedra preciosa.
                        </p>
                        <p>
                            Esta tenía un topacio; la otra, un aguamarina; aquella, un lapislázuli; y la de más allá,
                            una esmeralda. ¡Era una verdadera maravilla!
                            <br>
                            Pero se empezó a decir que aquello era peligroso:
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
                        <h5>La leyenda de las cebollas</h5>
                        <p>
                            –¡Las cebollas deben ser blancas como siempre habrían sido!
                        </p>
                        <p>
                            Total, que las cebollas de colores tuvieron que empezar a esconder su piedra preciosa. Se
                            pusieron capas y más capas, cada vez más oscuras y feas, para disimular cómo eran por
                            dentro. Y así se convirtieron en unas cebollas de lo más vulgares.

                        </p>

                        <p>
                            Pasó entonces por allí un sabio, que gustaba sentarse a la sombra del huerto y sabía tanto
                            que podía comunicarse con las cebollas. Empezó a preguntarles una por una:
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
                        <h5>La leyenda de las cebollas</h5>
                        <p>
                            –¿Por qué no te muestras como eres por dentro?
                        </p>
                        <p>
                            Y ellas le iban respondiendo:
                        </p>

                        <p>
                            –Nos obligaron a ser así.
                        </p>
                        <p>
                            –Nos fuimos poniendo capas porque los demás nos criticaron mucho por nuestros colores.
                        </p>
                        <p>
                            Algunas cebollas tenían hasta diez capas y ya ni se acordaban de por qué se pusieron las
                            primeras.
                        </p>
                        <p>
                            El sabio se echó a llorar al escuchar las tristes historias de las cebollas. Y desde
                            entonces todo el mundo sigue llorando cuando una cebolla nos abre su corazón.
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