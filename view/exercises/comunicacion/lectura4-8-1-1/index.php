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
                        <h5>El cuento navideño del reno Rudolph</h5>
                        <p>
                            Érase una vez un reno llamado Rudolph que, por haber nacido con una curiosa y peculiar nariz
                            roja, grande y brillante, caminaba solitario por el mundo. Los demás renos se burlaban de
                            Rudolph todo el tiempo, con frases como ¡pareces un payaso!, ¡tienes una manzana en la
                            nariz!… Rudolph se sentía muy avergonzado y cada día se alejaba más de la gente. Su familia
                            sentía mucha pena por él.
                        </p>
                        <p>

                            Las bromas sobre la nariz de Rudolph eran tan molestas y constantes que Rudolph acabó
                            apartándose de todos. Vivía triste, encerrado en su casa, sumamente deprimido.
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
                        <h5>El cuento navideño del reno Rudolph</h5>
                        <p>
                            Con el apoyo de sus padres, Rudolph decidió abandonar el pueblo donde vivía y empezó a
                            caminar sin rumbo durante días, meses, años... <br>
                            Se acercaba la Navidad y Rudolph seguía solo por su camino. Pero una noche, en víspera
                            navideña, en que las estrellas brillaban más que en otros días en el cielo, Santa Claus
                            preparaba su trineo, como todos los años. Contaba y alineaba los 8 renos que tiran de su
                            trineo para llevar regalos a todos los niños del mundo. Santa Claus ya tenía todo preparado
                            cuando de repente una enorme y espesa niebla cubrió toda la noche.
                        </p>
                        <p>

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
                        <h5>El cuento navideño del reno Rudolph</h5>
                        <p>
                            Desorientado y asustado, Santa Claus se preguntaba cómo lograrían volar el trineo si no
                            conseguían ver nada. ¿Cómo encontrarían las chimeneas?, ¿dónde dejarían los regalos? A lo
                            lejos, Santa Claus vio una luz roja y brillante y empezó a seguirla con su trineo y renos.
                            No conseguía saber de qué se trataba, pero a medida que se acercaban, se llevaron una enorme
                            sorpresa. ¡Era el reno Rudolph! Sorprendido y feliz, Santa Claus pidió a Rudolph que tirara
                            él también de su trineo. El reno no podía creérselo. Lo aceptó enseguida y con su nariz
                            iluminaba y guiaba a Santa por todas las casas con niños del mundo.

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
                        <h5>El cuento navideño del reno Rudolph</h5>
                        <p>
                        Y fue así como Santa Claus consiguió entregar todos los regalos en la noche de Navidad, gracias al esfuerzo y la colaboración del reno Rudolph. Sin su nariz roja, los niños estarían sin regalos hasta hoy. Rudolph se convirtió en el reno más querido y más admirado por todos. ¡Un verdadero héroe!

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