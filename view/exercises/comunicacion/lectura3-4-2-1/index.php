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
                    <li class="tab col s3 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Parte 2</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>Los dos príncipes</h5>
                        <h5 style="font-size: 150%;padding-top: 20px;font-family:Verdana;">I</h5>
                        <p>
                            El palacio está de luto <br>
                            y en el trono llora el rey,<br>
                            y la reina está llorando <br>
                            donde no la pueden ver:<br>
                            en pañuelo de holán fino<br>
                            lloran la reina y el rey.<br>
                            Los señores del palacio<br>
                            están llorando también.<br>
                            Los caballos llevan negro<br>
                            el penacho y el arnés;<br>
                            los caballos no han comido,<br>
                            porque no quieren comer.
                        </p>
                        <p>
                            El laurel del patio grande<br>
                            quedó sin hojas esta vez:<br>
                            todo el mundo fue al entierro<br>
                            con coronas de laurel.<br>
                            ¡El hijo del rey se ha muerto!<br>
                            ¡Se le ha muerto el hijo al rey!<br>
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
                        <h5>Los dos príncipes</h5>
                        <h5 style="font-size: 150%;padding-top: 20px;font-family:Verdana;">II</h5>
                        <p>
                            En los álamos del monte<br>
                            tiene su casa el pastor;<br>
                            la pastora está diciendo:<br>
                            “¿Por qué tiene luz el sol?”.<br>
                            Las ovejas, cabizbajas,<br>
                            vienen todas al portón.<br>
                            Una caja larga y honda<br>
                            está forrando el pastor.<br>
                            Entra y sale un perro triste,<br>
                            canta allá dentro una voz.<br>
                           
                        </p>

                        <p class="autor">
                            “Pajarito, yo estoy loca;<br>
                            ¡llévame donde él voló!”.<br>
                            El pastor coge llorando<br>
                            la pala y el azadón,<br>
                            abre en la tierra una fosa,<br>
                            echa en la fosa una flor.<br>
                            ¡Se quedó el pastor sin hijo!<br>
                            ¡Murió el hijo del pastor!<br>
                            
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