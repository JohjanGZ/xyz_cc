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

            <div class="tablero">
                <ul class="contenedor-silabas">
                    <li class="silabas">
                        <h4 class="pieza" alt="cuñado">cuñado</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="suegro">suegro</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="sobrina">sobrina</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="nuera">nuera</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="yerno">yerno</h4>
                    </li>
                </ul>
                <div class="contenedor-img">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
            </div>

            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">Mi madre es la</span>
                        <div class="palabra" alt="nuera">

                        </div>
                        <span>de mi abuelo paterno.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">Mi abuelo materno es el</span>
                        <div class="palabra x" alt="suegro">

                        </div>
                        <span>de mi padre.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">Mi prima es la</span>
                        <div class="palabra x" alt="sobrina">

                        </div>
                        <span>de mi madre.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">Mi tío paterno es el</span>
                        <div class="palabra x" alt="cuñado">

                        </div>
                        <span>de mi madre.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">Mi padre es el</span>
                        <div class="palabra x" alt="yerno">

                        </div>
                        <span>de mi abuela materna.</span>
                    </div>
                </div>
            </div>

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
function result_tipo_1_8_19() {
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