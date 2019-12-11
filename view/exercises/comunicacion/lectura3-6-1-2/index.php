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
                        <h5>El asno disfrazado de león</h5>
                        <p>
                            Cierta vez, un asno se vistió con una piel de león que encontró en el camino. Los animales
                            se asustaron al verlo y huyeron hacia la espesura de la selva. El miedo se apoderó de toda
                            la región.
                        </p>
                        <p>
                            El asno, ahora respetado y muy temido, se paseaba orgulloso y en forma vanidosa por toda la
                            selva. Cuando su amo lo echó de menos, salió a buscarlo por todas partes a pesar del duro
                            día de trabajo. Al encontrar una extraña figura, sintió terror y huyó.
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
                        <h5>El asno disfrazado de león</h5>
                        <p>
                        Después de un rato, el amo recordó las grandes orejas que salían de la piel del león y se dio cuenta de la mentira. Regresó donde estaba el animal y le quitó el disfraz, haciéndole pasar mucha vergüenza ante los demás animales de la región. Partió el amo rumbo a su campo, y el asno con la cabeza gacha lo siguió.
                        </p>
                        <p>
                         <span style="color:#0095da;">
                         Moraleja:
                         </span> “No simules lo que no eres si pasar vergüenza no quieres”.
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