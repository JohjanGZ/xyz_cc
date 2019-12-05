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
                        <h5>El hijo del rey y el león pintado</h5>
                        <p>
                            Un rey, cuyo único hijo era aficionado a los ejercicios marciales, tuvo un sueño en el que
                            fue advertido de que su hijo moriría por culpa de un león.
</p>
<p>
                            Temeroso de que el sueño se hiciera realidad, construyó para su hijo un agradable palacio y,
                            para su diversión, embelleció las paredes con dibujos de todas las clases de animales de
                            tamaño natural, entre los cuales estaba el de un león.
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
                        <h5>El hijo del rey y el león pintado</h5>
                        <p>
                            Cuando el joven príncipe vio que lo encerrarían en el palacio, sintió una gran tristeza y,
                            acercándose al dibujo del león, dijo:
                            
                        </p>
                        <p>
                            ―¡Oh usted, el más detestable de los animales! Por un sueño intimidante de mi padre, y por
                            lo que él vio en su sueño, he sido encerrado en este palacio como si yo fuera un malvado.
                            ¿Qué haré ahora?
                        </p>
                        <p>
                            Terminó estas palabras y, sin pensarlo dos veces, estiró sus manos hacia un árbol de espinas
                            para cortar un palo de sus ramas, a tal punto que pudiera golpear el dibujo del león.
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
                        <h5>El hijo del rey y el león pintado</h5>
                        
                        <p>
                            Pero una de las espinas del árbol perforó su dedo y le causó un gran dolor e inflamación, de
                            modo que el joven príncipe cayó desvanecido. Una fiebre violenta se apoderó de él y murió,
                            no muchos días más tarde.
                        </p>
                        <p>
                            <span style="color: #37d3f7;">Moraleja: </span> Si afrontamos los problemas con paciencia y cautela, obtendremos mejores resultados.
                        </p>

                        <p style="text-align: right;">
                        Fábulas de Esopo
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