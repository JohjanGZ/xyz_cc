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
                        <h5>La pastora que se convirtió en zarina</h5>
                        <p>
                            Una vez, el zar publicó un edicto en el que decía: “Aquel que sea capaz de matar esta
                            piedra, se convertirá en el número uno de mi imperio”. A la cita acudieron hombres de todo
                            el país, pero ninguno acababa de entender cómo se podía matar una piedra. Entonces se
                            presentó a la prueba una joven pastora disfrazada de hombre y el zar la invitó a probar si
                            era capaz de matar a la piedra. La muchacha, que era muy lista, dijo: “Zar, si quieres que
                            mate a la piedra, antes tendrás que darle un alma, y si entonces no la mato, quédate con mi
                            cabeza”.
                        </p>
                        <p>
                            El zar se quedó tan maravillado con aquella magnífica respuesta que propuso a la muchacha
                            adivinar un nuevo acertijo:
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
                        <h5>La pastora que se convirtió en zarina</h5>
                        <p>
                            “Si consigues esto que te voy a pedir, serás para mí como un hijo. De aquí a tres días
                            tienes que venir de nuevo a palacio, cabalgando y no cabalgando, debes traer un regalo y no
                            traerlo, y debes conseguir que la gente te reciba y no te reciba”.
                        </p>
                        <p>
                            Pasados los tres días, la pastora guardó tres liebres en sacos y se las dio a unos
                            campesinos, pidiéndoles que las soltaran cuando ella lo ordenase. Además, tomó consigo dos
                            palomas y una cabra. El zar y muchos ciudadanos salieron a recibirla, pero cuando se
                            acercaron, la muchacha ordenó a los campesinos que soltaran las liebres, y toda la gente
                            salió tras ellas para cazarlas.
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
                        <h5>La pastora que se convirtió en zarina</h5>
                        <p>
                            La muchacha venía montada sobre la cabra, apoyando a veces los pies en el suelo y otras
                            veces levantándolos, de forma que cabalgaba sobre ella. Cuando llegó hasta el zar, sacó las
                            dos palomas y se las tendió como regalo, pero en ese momento echaron a volar.

                        </p>
                        <p>
                            Entonces dijo: “La gente me ha recibido y no me ha recibido. He venido cabalgando y no
                            cabalgando, y te he traído un regalo, pero no te lo he traído”.
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
                        <h5>La pastora que se convirtió en zarina</h5>
                        <p>
                            ―“De hoy en adelante serás para mí como un hijo”, dijo el zar, maravillado por la
                            inteligencia de aquella sorprendente muchacha. Pero ella contestó: “Es que soy una mujer”.
                            Entonces, el zar decidió tomarla por esposa y así, gracias a su inteligencia, la pastora se
                            convirtió en zarina.
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