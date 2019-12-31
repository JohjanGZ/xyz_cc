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
                        <h5>Los sueños de la granjera</h5>
                        <p>
                            En un lugar muy hermoso y rodeado de montañas vivía un granjero. Tenía una granja con tres
                            vacas, muchas ovejas, un cerdo y un montón de gallinas. Sin embargo, cuidaba poco de los
                            animales. Los pobres estaban sucios, descuidados y tristes.
                        </p>
                        <p>

                            Un día llegó a la granja una muchacha que se llamaba Teresa. Ella siempre soñaba con tener
                            una pequeña granja y como le gustaban mucho los animales, se quedó a trabajar con el
                            granjero. Teresa limpiaba diariamente los establos, acariciaba a los animales, les daba la
                            mejor comida y hablaba siempre con ellos.
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
                        <h5>Los sueños de la granjera</h5>
                        <p>
                            Después de un tiempo, todos se dieron cuenta que las vacas empezaron a dar más leche, las
                            ovejas se cubrieron de abundante lana, el cerdo engordó y las gallinas ponían más huevos. El
                            granjero estaba contento y, como recompensa, regaló a Teresa un cántaro de leche.
                        </p>
                        <p>
                            Teresa se puso el cántaro, que le habían regalado, en la cabeza y caminó rumbo al mercado.
                            Mientras caminaba, iba pensando:
                        </p>
                        <p>
                            —Venderé la leche y con el dinero que me den compraré huevos. Y de los huevos nacerán
                            pollitos, que pronto se convertirán en hermosas gallinas. Luego venderé las gallinas y
                            compraré un cerdo. Y cuando el cerdo esté bien gordo lo venderé y compraré una vaca. La vaca
                            me dará mucha leche, así que pronto compraré otra y otra.
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
                        <h5>Los sueños de la granjera</h5>
                        <p>
                            Cada vez más contenta, Teresa cantaba y saltaba camino al mercado. De pronto, tropezó y
                            ¡plas!... el cántaro cayó al suelo y la leche se derramó. Teresa se echó a llorar
                            amargamente, pero pronto emprendió el regreso a la granja. Y por el camino empezó a pensar:
                            —Seguiré trabajando en la granja y conseguiré un cántaro de leche. Venderé la leche y
                            compraré huevos. Y de los huevos nacerán pollitos que pronto se convertirán en hermosas
                            gallinas y compraré un cerdito…
                        </p>
                        <p>
                            Y cuentan que al poco tiempo había en aquel valle una nueva granja. Era una granja pequeña
                            con una preciosa vaca rubia, dos ovejas y un lindo cerdito que seguía a la granjera a todas
                            partes. La granjera, claro está, era Teresa.

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