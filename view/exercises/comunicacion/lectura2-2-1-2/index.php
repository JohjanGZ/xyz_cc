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
                <h5>Una cena sorpresa - 2da parte</h5>
                <p>
                    Pablo, muy alarmado, cogió el plato, fue al cuarto de baño, vertió la sopa por el inodoro y tiró de
                    la cadena. Lanzó un suspiro de alivio. Volvió a la mesa. Su madre le trajo un huevo frito con
                    patatas y se fue a la cocina a freír el suyo. En cuanto ella se fue, el huevo frito realizó un
                    espectacular despegue en vertical. Frenó un milímetro antes de estrellarse contra la lámpara y
                    comenzó a dar vueltas por toda la habitación. “¡Parece un platillo volante!” exclamó Pablo,
                    siguiéndolo con la mirada, fascinado.
                </p>
                <p>
                    El huevo frito hizo una exhibición de vuelo acrobático sensacional. Y, cuando advirtió que la madre
                    de Pablo volvía, realizó un aterrizaje impecable en el plato y se quedó muy quieto junto a las
                    patatas fritas.
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