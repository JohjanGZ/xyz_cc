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
                <h5>Una cena sorpresa</h5>
                <p>
                    La madre de Pablo había hecho sopa de letras para cenar. Puso los dos platos de sopa sobre la mesa
                    del comedor y volvió a la cocina para freír unos huevos.
                </p>
                <p>
                    Pablo se llevaba a la boca la primera cucharada, mirándola distraídamente, cuando de pronto dio un
                    respingo. En la superficie de la sopa que había en la cuchara, cuatro letras de pasta habían formado
                    la palabra HOLA. Tras la sorpresa inicial, pensó: “¡Qué casualidad! Mira que caer precisamente así
                    esas letras”. Y sonriendo, divertido, se tragó la cucharada de sopa. Al tomarse la segunda,
                    descubrió con asombro que las letras decían: CIEGO EL QUE LO LEA.
                </p>
                <p>
                    Aquello era demasiado. Con la boca abierta y la cuchara inmovilizada, Pablo miró al plato. Entre la
                    multitud de letras del plato reinaba gran agitación. Todas nadaban de aquí para allá. Se daban
                    empujones y codazos. Parecían pelearse para escoger los mejores sitios. Después, todas se quedaron
                    quietas. Y en el centro del círculo de la sopa quedó escrita una advertencia: OJO, NO ME COMAS. SI
                    TE ATREVES A COMERME ME DEDICARÉ A ESCRIBIR DENTRO DE TU BARRIGA.
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