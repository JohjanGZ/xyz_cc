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
                    <li class="tab col s4"><a href="#test-swipe-3">Parte 3</a></li>

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>¿Por qué son importantes las lenguas en el Perú?</h5>
                        <p>
                            Nuestro país posee una rica tradición cultural, llena de diversas costumbres, creencias y
                            lenguas. Sin embargo, esta riqueza nos ha llevado a marcar diferencias profundas entre los
                            pobladores. <br>
                            Si una persona nos pregunta qué idioma nos gustaría aprender además del castellano,
                            probablemente responderemos que inglés, francés, portugués u otro idioma extranjero, y nos
                            olvidamos que también el quechua, el aymara y las lenguas amazónicas son lenguas valiosas y
                            parte crucial de nuestro legado cultural. <br>
                            El argumento que se utiliza para justificar estas respuestas es que estamos en un mundo
                            globalizado y que, por lo tanto, necesitamos desenvolvernos en él con todas las herramientas
                            posibles y una de estas es el manejo de una lengua extranjera.
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
                        <h5>¿Por qué son importantes las lenguas en el Perú?</h5>
                        <p>
                            Sin querer, estamos reconociendo que existen lenguas más útiles que otras y condenamos a
                            nuestras lenguas a su desaparición.

                            <br>
                            En nuestro país, existen no menos de cuarenta lenguas amazónicas, entre las más habladas
                            destacan: el ashaninka, el machiguenga y el aguaruna.
                        </p>
                        <p>
                            Es importante conocer y mantener las lenguas porque nos permiten estar en contacto no solo
                            con los hablantes, sino también con las costumbres, las creencias y los rituales que tienen
                            sus pueblos. Asimismo, al estar en contacto se nos brinda la oportunidad de acercarnos al
                            mundo que nos rodea con diferentes formas de pensamiento.
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
                        <h5>¿Por qué son importantes las lenguas en el Perú?</h5>
                        <p>
                            Ser parte de esta riqueza nos debe impulsar a ser cada día mejores, a intentar conocer más
                            nuestras culturas e interactuar con ellos sin rechazo ni discriminación.

                        </p>
                        <p>
                            Por eso, como peruanos, debemos ser los primeros en impedir que nuestras lenguas queden en
                            el olvido, como ya está pasando con algunas que están prácticamente condenadas a la
                            desaparición; por el contrario, debemos preservar y conservar esta riqueza lingüística,
                            protegiendo a los pueblos y fomentando el conocimiento de nuestras culturas para lograr una
                            identificación mayor con los peruanos.
                        </p>
                        <p style="text-align: right;color:cornflowerblue;">
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