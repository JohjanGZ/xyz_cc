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

            <div class="contenedor-ejercicios">
                <div class="poema">
                    <div class="estrofa">
                        <div class="contenedor-estrofa respuesta" alt="uno">

                        </div>
                        <div class="texto-estrofa">
                            <p class="llave">
                                Tres casitas bajas <br>
                                junto al riachuelo, <br>
                                tres casitas lindas <br>
                                del color del cielo.
                            </p>
                            <div class="verso respuesta" alt="versouno">

                            </div>
                        </div>
                    </div>
                    <div class="estrofa">
                        <div class="contenedor-estrofa respuesta" alt="dos">

                        </div>
                        <div class="texto-estrofa">
                            <p class="llave">
                                Una es de Fernando, <br>
                                otra es de Consuelo <br>
                                y la mpas pequeña, <br>
                                la que tiene un huerto, <br>
                                es la casa mía <br>
                                y la de mi abuelo.
                            </p>
                            <div class="verso respuesta" alt="versodos">

                            </div>
                        </div>
                    </div>
                    <div class="estrofa">
                        <div class="contenedor-estrofa respuesta" alt="tres">

                        </div>
                        <div class="texto-estrofa">
                            <p>
                                Tres casitas bajas <br>
                                junto al riachuelo.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Estrofa 1</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Estrofa 2</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">Estrofa 3</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="versouno">Verso A</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="versodos">Verso B</h4>
                </li>
            </ul>
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_4_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>