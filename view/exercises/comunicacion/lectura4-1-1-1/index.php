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
                        <h5>El loro y su Jaula</h5>
                        <p>
                            Esta es la historia de un loro que no sabía lo que quería. Desde hacía un buen número de
                            años vivía enjaulado, y su propietario era un anciano al que el animal hacía compañía. Un
                            día, el anciano invitó a un amigo a su casa para tomar juntos un sabroso té. Los dos hombres
                            pasaron al salón donde estaba el loro. Mientras los dos hombres se encontraban tomando el
                            té, el loro comenzó a gritar: <br>
                            —¡Libertad, libertad, libertad!
                        </p>
                        <p>
                            Durante todo el tiempo en que estuvo el invitado en la casa, el animal no dejó de pedir
                            libertad. Hasta tal punto era insistente su petición, que el invitado se sintió muy apenado
                            y ni siquiera pudo terminar su taza de té. Estaba saliendo por la puerta y el loro seguía
                            gritando:
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
                        <h5>El loro y su Jaula</h5>
                        <p>
                            —!Libertad, libertad! <br>
                            Pasaron los días. El invitado no podía dejar de pensar con compasión en el loro. Tanto le
                            apenaba el estado del animalito que decidió que era necesario ponerlo en libertad. Pensó un
                            plan. Sabía cuándo el anciano dejaba su casa para ir a efectuar la compra. Iba a aprovechar
                            esa ausencia y a liberar al pobre loro. Un día después, el invitado se situó cerca de la
                            casa del anciano y, en cuanto lo vio salir, corrió hacia su casa, abrió la puerta con una
                            ganzúa y entró en el salón, donde el loro continuaba gritando: <br>
                            —!Libertad, libertad!
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
                        <h5>El loro y su Jaula</h5>
                        <p>
                            ¿Quién no hubiera sentido piedad por el animalito? Se acercó a la jaula y abrió la puerta.
                            Entonces el loro, aterrado, se lanzó al lado opuesto de la jaula y se aferró con su pico y
                            uñas a los barrotes de la jaula, negándose a abandonarla. El loro seguía gritando: <br>
                            —!Libertad, libertad!
                        </p>
                        <p>
                            Como este loro, hay muchas personas que dicen querer hacer cosas, se quejan de no poder
                            hacerlas pero, cuando tienen ocasión de realizarlas se acobardan y buscan excusas para
                            continuar igual.
                        </p>


                    </div>
                    <div class="imagen-lectura" style="padding-top: 40px;">
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