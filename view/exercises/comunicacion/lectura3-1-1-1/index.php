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
                        <h5>Memed, el flaco</h5>
                        <p>
                            Uno se cría, crece y madura según la tierra que lo acoge. Memed había crecido en una tierra
                            estéril. Mil y una desgracias habían impedido que alcanzara su máximo desarrollo.
                        </p>
                        <p>
                            Sus hombros eran estrechos y sus piernas parecían ramas secas.Tenía las mejillas hundidas y
                            la tez quemada por el sol. Si se le miraba con atención, su aspecto recordaba al de aquellos
                            robles, pequeños y achaparrados. Como ellos, aferrado a la tierra, fuerte y anguloso.
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
                        <h5>Memed, el flaco</h5>
                        <p>
                            Solo en un rincón, en un diminuto rincón, le quedaba cierta ternura. Sus labios eran rosados
                            y se fruncían ligeramente como los de un niño.

                        </p>
                        <p>
                            En sus comisuras parecía dibujarse siempre una sonrisa. En cierto modo, se ajustaba a su
                            amargura, a su fuerza.
                        </p>
                        <p style="text-align: right;color: #37d3f7;">
                        Yasar Kemal
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