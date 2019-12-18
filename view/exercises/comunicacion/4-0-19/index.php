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
                <div class="ejercicio">
                    <ul class="contenedor-silabas uno">
                        <li class="silabas">
                            <h4 class="pieza" alt="dragon">dragón</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="camaleon">camaleón</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="pardo">pardo</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="canario">canario</h4>
                        </li>
                    </ul>
                    <div class="contenedor-respuesta">

                        <div class="palabra contenedor" alt="camaleon">

                        </div>
                        <div class="palabra contenedor" alt="canario">

                        </div>
                        <div class="palabra contenedor" alt="dragon">

                        </div>
                        <div class="palabra contenedor" alt="pardo">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <ul class="contenedor-silabas dos">
                        <li class="silabas">
                            <h4 class="pieza" alt="cepillo">cepillo</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="revista">revista</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="setenta">setenta</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="rueda">rueda</h4>
                        </li>
                    </ul>
                    <div class="contenedor-respuesta">

                        <div class="palabra contenedor" alt="cepillo">

                        </div>
                        <div class="palabra contenedor" alt="revista">

                        </div>
                        <div class="palabra contenedor" alt="rueda">

                        </div>
                        <div class="palabra contenedor" alt="setenta">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <ul class="contenedor-silabas tres">
                        <li class="silabas">
                            <h4 class="pieza" alt="quesero">quesero</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="resumen">resumen</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="endibia">endibia</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="fuerte">fuerte</h4>
                        </li>
                    </ul>
                    <div class="contenedor-respuesta">

                        <div class="palabra contenedor" alt="endibia">

                        </div>
                        <div class="palabra contenedor" alt="fuerte">

                        </div>
                        <div class="palabra contenedor" alt="quesero">

                        </div>
                        <div class="palabra contenedor" alt="resumen">

                        </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_0_19() {
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