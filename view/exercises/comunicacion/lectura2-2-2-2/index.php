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
                    Cuando los payasos salieron a la pista, todos los niños aplaudimos. Nos hicieron reír mucho con sus
                    chistes. Solo se oían las risas. Eli, la Amazona, saltó por encima de los caballos y después los
                    hizo bailar al son de la música, consiguiendo que la obedecieran ciegamente. Todos aplaudimos. Al
                    final, el mago Rataplán hizo trucos maravillosos: nos adivinó el nombre a Ana, a mí me sacó un
                    paraguas de la bufanda del abuelo e hizo caer una lluvia de monedas de la nariz de Ana. Como número
                    final, sacó un conejo del sombrero de copa que él había puesto sobre mi cabeza. Era tan difícil y
                    nos gustó tanto que aplaudimos muchísimo. Nos encantaban las luces y los carteles y todo era tan
                    bonito que no queríamos marcharnos. Pero el abuelo insistía en que era la hora de cenar y tuvimos
                    que abandonar el circo.
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