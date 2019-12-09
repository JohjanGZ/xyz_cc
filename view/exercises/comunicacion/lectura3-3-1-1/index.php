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
                        <h5>La pequeña ardilla</h5>
                        <p>
                            En un bosque muy lejano, al pie de una inmensa montaña, vivía una pequeña ardilla llamada
                            Isabelita.
                        </p>
                        <p>
                            Allí había muchos árboles de toda clase: pinos, abetos, cedros, sauces. Algunos eran muy
                            altos, con muchas hojas y ramas; otros eran bajos y parecían desnudos, pues sus hojas se
                            habían caído.
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
                        <h5>La pequeña ardilla</h5>
                        <p>
                            En el bosque también vivían muchos animales como pájaros, liebres, ciervos, conejos... todos
                            muy lindos. Había, además, muchas ardillas. <br>
                            A pesar de que el bosque estaba lleno de animales, las que destacaban eran las ardillas.
                        </p>
                        <p>
                            La pequeña Isabelita se sentía muy triste porque se pasaba el día sola. Como era muy pequeña
                            y no sabía trepar a los árboles, no tenía ninguna amiga de su misma especie.
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
                        <h5>La pequeña ardilla</h5>
                        <p>
                            Un día, Isabelita estaba comiendo sola una bellota, cuando apareció otra ardilla un poco más
                            grande. Como esta tenía mucha hambre, la pequeña Isabelita le ofreció compartir su comida.
                            Desde ese momento, las dos ardillas fueron inseparables.
                        </p>
                        <p>
                            Isabelita aprendió a trepar a los árboles y a jugar como sus otras compañeras. Nunca más
                            volvió a sentirse sola.
                        </p>
                        <p style="text-align: right;">
                            Adaptación.
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