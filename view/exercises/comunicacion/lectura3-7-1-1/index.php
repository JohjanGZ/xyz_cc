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
                        <h5>Asamblea en la carpintería</h5>
                        <p>
                            Cuentan que en la carpintería hubo una vez una extraña asamblea. Fue una reunión de
                            herramientas para arreglar sus diferencias. El martillo ejerció la presidencia, pero la
                            asamblea le notificó que tenía que renunciar. ¿La causa?, hacía demasiado ruido y, además,
                            se pasaba el tiempo golpeando.
                        </p>
                        <p>
                            El martillo aceptó su culpa, pero pidió que también fuera expulsado el tornillo. Dijo que
                            había que darle muchas vueltas para que sirviera de algo. Ante el ataque, el tornillo
                            también aceptó su culpa, pero pidió la expulsión de la lija. Hizo ver que era muy áspera en
                            su trato y siempre tenía fricciones con los demás. Y la lija estuvo de acuerdo, a condición
                            de que fuera expulsado el metro, que siempre se la pasaba midiendo a los demás según su
                            medida, como si fuera el único perfecto.
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
                        <h5>Asamblea en la carpintería</h5>
                        <p>
                            En eso entró el carpintero, se puso el delantal e inició su trabajo. Utilizó el martillo, el
                            tornillo, la lija y el metro. Finalmente, la tosca madera inicial se convirtió en un lindo
                            juego de ajedrez. Cuando la carpintería quedó nuevamente sola, la asamblea reanudó la
                            deliberación. Fue entonces cuando se escuchó la voz del serrucho y dijo:
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
                        <h5>Asamblea en la carpintería</h5>
                        <p>
                            “Señores, ha quedado demostrado que tenemos defectos, pero el carpintero trabaja con
                            nuestras cualidades. Eso es lo que nos hace valiosos. Así que no pensemos ya en nuestros
                            puntos malos y concentrémonos en la utilidad de nuestros puntos buenos”. La asamblea
                            encontró entonces que el martillo era fuerte, el tornillo unía y daba fuerza, la lija era
                            especial para afinar y limar asperezas, y observaron que el metro era preciso y exacto. Se
                            sintieron entonces un equipo capaz de producir y hacer cosas de calidad. Se sintieron
                            orgullosos de sus fortalezas y de trabajar juntos.
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