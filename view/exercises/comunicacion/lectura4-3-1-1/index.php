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
                        <h5>La unión hace la fuerza</h5>
                        <p>
                            En un lindo bosque, la tortuga, el venado, el ratón y la paloma vivían juntos, unidos por
                            una buena amistad. Cada mañana, mientras el venado, el ratón y la paloma iban en busca de
                            alimentos, la tortuga se iba hasta el cercano estanque, donde pescaba peces que le servían
                            de alimento.
                        </p>
                        <p>
                            Al atardecer, todos estaban amigablemente reunidos en su casita de ramas y hojas, comían y
                            conversaban alegremente. Hasta que un día el venado, que estaba paseando por el bosque,
                            regresó asustado y les dijo a sus compañeros:
                        </p>
                        <p>
                            —¡Amigos, un cazador armado de arco y flechas se acerca! ¡Sálvese quien pueda!
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
                        <h5>La unión hace la fuerza</h5>
                        <p>
                            Todos los animales entraron en pánico. El ratón fue a ocultarse en su madriguera
                            subterránea; el venado, entre unas plantas; mientras que la paloma, con un rápido vuelo, fue
                            a situarse en la copa de un árbol. Solo la pobre tortuga, incapacitada para moverse con
                            rapidez, cayó en el poder del cazador, que la ató bien con una cuerda y se la echó al
                            hombro. Cuando el cazador se alejaba con su botín, los tres amigos de la tortuga salieron de
                            sus escondites.
                        <br>
                            —Tenemos que hacer algo para salvarla —dijo el venado.
                        <br>
                            Inmediatamente, se dejó caer como si estuviera muerto, junto a la orilla del estanque,
                            mientras que la paloma se le ponía encima, como si fuera a comérselo. <br>
                            El cazador, al ver aquello, cayó en la trampa dejando a la tortuga en el suelo, corrió hacia
                            el estanque. 
                        </p>


                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/2.png" alt="" class="materialboxed">
                    </div>
                </div>
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>La unión hace la fuerza</h5>
                        <p>
                            Este fue el momento que aprovechó el ratón para roer la cuerda que apresaba a
                            la tortuga. Por su parte, el venado y la paloma, al ver acercarse al cazador, escaparon
                            rápidamente, dejándolo muy asombrado. Y todavía lo estuvo más cuando regresó al lugar donde
                            había dejado a la tortuga y no encontró más que los restos de la cuerda con que la había
                            atado.
                            <br>
                            Protestando contra la astucia de los animales, el cazador se quedó sin pieza alguna,
                            mientras el ratón, la tortuga, el venado y la paloma celebraban alegremente su salvación.
                            Porque, por poderoso y fuerte que uno sea, nunca vencerá a los débiles que se agrupan
                            sólidamente. <br>
                            
                        </p>
                        <p>
                        <span style="color: blue;">Moraleja:</span> La unión hace la fuerza.
                        </p>


                    </div>
                    <div class="imagen-lectura">
                        <img src="<?= $dir ?>/img/2.png" alt="" class="materialboxed">
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