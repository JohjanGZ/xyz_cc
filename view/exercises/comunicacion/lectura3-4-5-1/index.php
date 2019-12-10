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
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>La leyenda de la jirafa</h5>
                        <p>
                            Hace unos años en África, cuando la existencia de la vida comenzó, Dios había creado los
                            animales y el género humano.

                        </p>
                        <p>
                            En la tierra, todos los animales y humanos estaban contentos. Todos menos la jirafa, pues no
                            era como las jirafas de hoy. Tenía el cuello corto y las patas cortas también. La pobre
                            jirafa tenía hambre, mucha hambre.
                       <br>
                            Todas las cebras y gacelas eran glotonas y comían todas las hierbas.
                        </p>
                        <p>
                        Un día la jirafa notó que los árboles estaban llenos de hojas suculentas. Ese día le pidió a Dios que le diera un cuello muy largo, así alcanzaría las hojas. Dios le concedió su deseo.
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
                        <h5>La leyenda de la jirafa</h5>
                        <p>
                        Al siguiente día, la jirafa se despertó y descubrió que su cuello era verdaderamente largo, por lo menos medía un metro. Finalmente, la jirafa pudo alcanzar las hojas de los árboles. Comió mucho y estuvo muy contenta. Entonces notó que los otros animales se reían de ella. Su cuerpo era desproporcionado. Otra vez la jirafa le pidió a Dios que le hiciera un cuerpo bien proporcionado.


                        </p>
                        <p>
                        Al día siguiente, la jirafa se despertó y descubrió que sus patas eran muy largas, por lo menos de dos metros. Ahora la jirafa podía alcanzar las hojas; además, era muy elegante, con el pescuezo largo y las patas muy largas. La jirafa estuvo muy contenta y le agradeció a Dios.


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