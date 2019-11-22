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
                        <h4 class="pieza" alt="clava">clava</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="chicle">chicle</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="esclavo">esclavo</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="claro">claro</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="ciclista">cicilista</h4>
                    </li>
                </ul>
                <div class="contenedor-img">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
            </div>

            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">El blanco es un color</span>
                        <div class="palabra" alt="claro">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">El</span>
                        <div class="palabra x" alt="ciclista">

                        </div>
                        <span>maneja bicicleta.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">El</span>
                        <div class="palabra x" alt="chicle">

                        </div>
                        <span>es para masticar.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">Nadie debe ser</span>
                        <div class="palabra x" alt="esclavo">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <span class="span-after">El alfiler se</span>
                        <div class="palabra x" alt="clava">

                        </div>
                        <span>fácilmente.</span>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_8_13() {
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