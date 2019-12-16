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

                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Estados de la materia</h5>
                        <p>
                            La materia se presenta en la naturaleza en tres estados distintos: sólido, líquido y
                            gaseoso. La materia puede pasar de un estado físico a otro por acción del frío o del calor.
                        </p>
                        <p>
                            <span>La evaporación </span>es el cambio de estado de una sustancia que pasa del estado líquido a gaseoso cuando se calienta o se aumenta la temperatura. 
                        </p>
                        <p>
                            <span>La solidificación </span>es el cambio de estado de una sustancia que pasa del estado líquido a sólido cuando se enfría o hay disminución de temperatura.
                        </p>
                        <p>
                            <span>La condensación </span>es el cambio de estado de una sustancia que pasa de estado gaseoso a líquido cuando choca con una superficie más fría.
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
                        <h5>Estados de la materia</h5>
                        <p>
                            <span>La fusión </span>es el cambio de estado de una sustancia que pasa de estado sólido a líquido al calentarse o por aumento de temperatura.
                        </p>
                        <p>
                            <span>La sublimación </span>es el cambio de estado de una sustancia que pasa de estado sólido a gaseoso cuando se calienta o se aumenta la temperatura, o viceversa cuando se enfría o hay disminución de temperatura.
                        </p>
                        <p>
                        El agua tiene la capacidad de pasar por los diferentes estados y es más de renovarse continuamente.
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