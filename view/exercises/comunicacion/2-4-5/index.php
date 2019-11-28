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
                    <div class="imagen-palabra">
                        <h4>BOLSO</h4>
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">

                            <div class="palabra" alt="bolso">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">

                            <div class="palabra" alt="bolso">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="bolso">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <h4>BOTÓN</h4>
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="boton">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="boton">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="boton">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <h4>BOLA</h4>
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="bola">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="bola">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <div class="palabra" alt="bola">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="bolso">bolsa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bolso">bolsillo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bolso">bolsita</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="boton">abotonar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="boton">botones</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="boton">desabotonar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bola">bolilla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bola">bolas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bola">bolo</h4>
                </li>
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
function result_tipo_2_4_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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