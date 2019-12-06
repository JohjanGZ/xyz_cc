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
                <h6>
                    Se escriben con mayúscula todos los nombres propios de personas y animales.
                </h6>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>
                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <h6>
                Se escriben con mayúscula los nombres de continentes, países, ciudades, ríos.
                </h6>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>
                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>

                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="dos">

                        </div>

                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Ezequiel</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Jhon</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Ingrid</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Fido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Scooby</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Firulais</h4>
                </li>
                

                <li class="silabas">
                    <h4 class="pieza" alt="dos">Perú</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Japón</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Venecia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Ámsterdam</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Amazonas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Europa</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_3_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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