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
                        <h5>El alacrán de Fray Gómez</h5>
                        <p>
                            Era un lego de Juan de la Pipirindica y de San Francisco Solano. Era refitolero en el
                            hospital de los frailes y el pueblo y la tradición lo recuerdan por Fray Gómez.
                            Fray Gómez hizo en mi tierra milagros a mantas, sin darse cuenta de ellos y como quien no
                            quiere la cosa.
                        </p>
                        <p>
                            Estaba una mañana en su celda, entregado a la meditación, cuando dieron a la puerta unos
                            golpecitos. <br>
                            —Entre, hermanito — autorizó Fray Gómez. <br>
                            Y entró un individuo algo desarrapado, delatando pobrezas, pero con la proverbial honradez
                            del castellano viejo. <br>
                            —Tome asiento, hermano, y dígame lo que por acá le trae — dijo Fray Gómez. <br>
                        </p>

                    </div>

                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El alacrán de Fray Gómez</h5>
                        <p>
                            —Padre, soy hombre de bien —dijo—. Trabajo de buhonero, pero mi negocio no cunde por falta
                            de quinientos duros. Las puertas se me han cerrado —añadió—, por eso le ruego que me los
                            preste por seis meses. Tengo fe de que lo hará. <br>
                            —La fe lo salvará, hermano. Espere un momento.
                            Paseando los ojos por las paredes, vio un alacrán que andaba por la ventana, lo cogió, lo
                            envolvió y dándoselo, le dijo: <br>
                            —Tome buen hombre, y empeñe esta alhajita, pero solo por seis meses. <br>
                            Se deshizo en agradecimientos y corrió donde el usurero. El alacrán era una alhaja: una
                            esmeralda engarzada sobre oro, y la cabeza un grueso brillante con dos rubíes por ojos.
                            El usurero, gran conocedor, la vio con codicia y le ofreció dos mil duros; pero el buhonero
                            solo aceptó los quinientos por seis meses, más el interés judaico.
                        </p>


                    </div>

                </div>
            </div>
            <div id="test-swipe-3" class="col s12 lectura-img">
                <div class="container-cuento">
                    <div class="lectura">
                        <h5>El alacrán de Fray Gómez</h5>
                        <p>

                            Firmaron papeletas, acariciando el agiotista la esperanza de que podía ser suya.
                            Pero fuele tan bien al buhonero, que cumplido el plazo desempeñó la prenda y, envuelta
                            igual, se la devolvió a Fray Gómez. Este la tomó, la puso en la ventana y la bendijo,
                            diciendo:
                        </p>
                        <p>
                            —Animalito de Dios, sigue tu camino. <br>
                            Y el alacrán echó a andar libremente por las paredes de la celda.
                        </p>
                        <p style="text-align: right;font-weight: 600; color: #1b92de;">
                            Ricardo Palma. En Tradiciones peruanas. <br>
                            (Adaptación)
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