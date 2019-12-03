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
                        <h5>Itzelina y los rayos del sol</h5>
                        <p>
                            Itzelina Bellas Chapas era una niña muy curiosa que se levantó temprano una mañana con la
                            firme intención de atrapar, para ella sola, todos los rayos del sol.
                        </p>
                        <p>
                            Una ardilla voladora que brincaba entre árbol y árbol le gritó desde lo alto:<br>
                            ―¿A dónde vas, Itzelina? <br>
                            Y la niña respondió: <br>
                            ―Voy a la alta montaña, a pescar con mi malla de hilos todos los rayos del sol y así
                            tenerlos para mí solita. <br>
                            ―No seas mala, bella Itzelina,―le dijo la ardilla– deja algunos pocos para que me iluminen
                            el camino y yo pueda encontrar mi alimento. <br>
                            ―Está bien, amiga ardilla ―le contestó Itzelina― no te preocupes. Tendrás como todos los
                            días rayos del sol para ti.
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
                        <h5>Itzelina y los rayos del sol</h5>
                        <p>
                        Siguió caminando Itzelina mientras pensaba en los rayos del sol, cuando un inmenso árbol le preguntó: <br>
                        ―¿Por qué vas tan contenta, Itzelina? <br>
                        ―Voy a la alta montaña, a pescar con mi malla de hilos todos los rayos del sol y así tenerlos para mí solita; y poder compartir algunos con mi amiga, la ardilla voladora. <br>
                        El árbol, muy triste, le dijo: <br>
                        ―También yo te pido que compartas conmigo un poco de sol porque con sus rayos seguiré creciendo y más pajaritos podrán vivir en mis ramas. <br>
                        ―Claro que sí, amigo árbol, no estés triste. También guardaré unos rayos de sol para ti.
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
                        <h5>Itzelina y los rayos del sol</h5>
                        <p>
                            Itzelina empezó a caminar más rápido, porque llegaba la hora en la que el sol se levantaba y ella quería estar a tiempo para atrapar los primeros rayos que lanzara.<br>
                            Pasaba por un corral cuando un gallo que estaba parado sobre la cerca la saludó. <br>
                            ―Hola, bella Itzelina. ¿A dónde vas con tanta prisa? <br>
                            ―Voy a la alta montaña, a pescar con mi malla de hilos todos los rayos del sol y así poder compartir algunos con mi amiga la ardilla voladora, para que encuentre su alimento; y con mi amigo el árbol, para que siga creciendo y le dé hospedaje a muchos pajaritos. <br>
                            ―Yo también te pido algunos rayos de sol para que pueda saber en las mañanas a qué hora debo cantar y así los adultos lleguen temprano al trabajo y los niños no vayan tarde a la escuela.

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
                        <h5>Itzelina y los rayos del sol</h5>

                        <p>
                        ―Claro que sí, amigo gallo, también a ti te daré algunos rayos de sol ―le contestó Itzelina. <br>
                        Itzelina siguió su camino, pensando en lo importante que eran los rayos del sol para las ardillas y para los pájaros; para las plantas y para los hombres; para los gallos y para los niños. <br>
                        Entendió que si algo les sirve a todos, no es correcto que lo quiera guardar para ella misma porque eso es egoísmo. Llegó a la alta montaña, dejó su malla de hilos a un lado y se sentó a esperar al sol. <br>
                        Ahí, sentadita y sin moverse, le dio los buenos días, y vio cómo, lentamente, los árboles, los animales, las casas, los lagos y los niños se iluminaban y se llenaban de colores gracias a los rayos del sol. <br> 
                        Este cuento nos enseña lo importante que es el respeto al bien común.
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