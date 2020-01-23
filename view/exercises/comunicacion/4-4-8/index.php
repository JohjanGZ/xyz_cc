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

                    <div class="contenedor-respuesta">
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="e1">x</span>
                            Qué suerte tienes
                            <span class="palabra" alt="e2">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="i1">x</span>
                            Cuántas personas asistieron a la charla
                            <span class="palabra" alt="i2">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="e1">x</span>
                            Qué lindo vestido
                            <span class="palabra" alt="e2">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="i1">x</span>
                            De qué color vas a pintar tu casa
                            <span class="palabra" alt="i2">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="e1">x</span>
                            Cuánto tráfico hay hoy
                            <span class="palabra" alt="e2">x</span>
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="e1">¡</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e1">¡</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e2">!</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e1">¡</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e2">!</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="e2">!</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="i1">¿</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="i1">¿</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="i2">?</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="i2">?</h4>
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
function result_tipo_4_4_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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