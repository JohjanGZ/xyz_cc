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
                        <h5>Los osos panda</h5>
                        <p style="margin-bottom: 0;">
                            El panda gigante es un insaciable devorador de bambú. Un ejemplar medio se pasa la mitad del
                            día comiendo, literalmente, 12 de cada 24 horas-y hace sus necesidades docenas de veces al
                            día. Hacen falta 12,5 kilos de bambú para cubrir las necesidades alimenticias diarias de un
                            panda gigante, que arranca ansiosamente los tallos con los alargados huesos de sus muñecas,
                            usándolos a modo de pulgares. Ocasionalmente también comen pájaros o roedores.
                        </p>
                        <p>
                            Los osos panda solo se encuentran en estado salvaje en remotas regiones montañosas del
                            centro de China. Allí las elevadas plantaciones de bambú son frescas y húmedas, como a ellos
                            les gusta. En verano pueden ascender hasta los 4.000 metros de altitud para buscar su
                            alimento en las laderas más altas.
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
                        <h5>Los osos panda</h5>
                        <p>
                            Es habitual ver a los osos panda comer relajadamente sentados en el suelo, con sus patas
                            traseras estiradas hacia adelante. Aunque den la impresión de ser sedentarios, trepan a los
                            árboles con gran habilidad y son excelentes nadadores.
                        </p>
                        <p>
                            Los pandas gigantes son animales solitarios. Tienen un sentido del olfato muy desarrollado
                            que los machos emplean para evitarse entre sí y para encontrar una hembra con la que pueda
                            aparearse en primavera. Tras un embarazo de cinco meses, la hembra da a luz a un único
                            cachorro o a gemelos, aunque en este caso no es capaz de cuidar de los dos.
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
                        <h5>Los osos panda</h5>
                        <p>
                            Los pequeños pesan apenas unos 150 gramos al nacer y no pueden gatear hasta cumplidos los
                            tres meses. Nacen ciegos y de color totalmente blanco; solo más tarde su pelo toma las
                            tonalidades que lo hacen tan atractivo.
                        </p>
                        <p>
                            Únicamente quedan unos 1.000 pandas gigantes en libertad, y quizás otros 100 que viven en
                            zoos, donde siempre es una de las atracciones más populares. Mucho de lo que sabemos sobre
                            los pandas proviene de la observación de los ejemplares en cautividad, ya que sus primos de
                            las montañas chinas son esquivos y raros de ver.
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