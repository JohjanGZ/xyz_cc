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
            
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El niño y los dulces</h5>
                        <p>
                            Un niño metió su mano en un recipiente lleno de dulces y tomó lo más que pudo.
                            Cuando trató de sacar la mano, el cuello del recipiente no le permitió hacerlo.
                        </p>
                        <p>
                            Como tampoco quería perder aquellos dulces, lloraba amargamente su desilusión.
                        </p>
                        <p>
                            Un amigo que estaba cerca le dijo: “Confórmate solamente con la mitad y podrás sacar
                            la mano con los dulces”.
                        </p>
                        <p>
                            <span style="color: #37d3f7;">Moraleja: </span> Nunca trates de abarcar más de lo debido, ya
                            que no conseguirás obtener nada al final.
                        </p>

                        <p style="text-align: right;">
                            Fábulas de Esopo
                        </p>
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