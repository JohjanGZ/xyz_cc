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
        <div class="container-cuento">
            <div class="lectura">
                <h5>Paco y Ana van al circo</h5>
                <p>
                    Desde que Diana habló del circo por la radio, todas las paredes de la ciudad estaban llenas de
                    carteles. Se anunciaba como el circo SUSO.
                </p>
                <p>
                    A las doce de la mañana, los payasos recorrían la ciudad. Con ellos iban EIi, la Amazona, y los
                    chimpancés. Detrás íbamos todos los niños que acabábamos de salir de la escuela. El paseo era muy
                    divertido.
                </p>
                <p>
                    Habíamos insistido tanto en casa que el sábado por fin fuimos al circo. Toda la carpa resplandecía
                    de luces de colores y estaba llena de banderas. Su tela era muy grande y daba cobijo a mucha gente.
                </p>
            </div>
            <div class="imagen-lectura">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>