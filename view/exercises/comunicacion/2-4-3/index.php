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
                        <img src="<?= $dir ?>/img/1.png">
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">

                            <span class="span-after">zap-ato</span>
                        </div>
                        <div class="contenedor-respuesta">

                            <span class="span-after">zap</span>
                            <div class="palabra" alt="zap">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <span class="span-after">zap</span>
                            <div class="palabra" alt="zap">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">
                            <span class="span-after">pan-adería</span>
                        </div>
                        <div class="contenedor-respuesta">
                            <span class="span-after">pan</span>
                            <div class="palabra" alt="pan">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <span class="span-after">pan</span>
                            <div class="palabra" alt="pan">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="respuestas">
                        <div class="contenedor-respuesta">
                            <span class="span-after">frut-ería</span>
                        </div>
                        <div class="contenedor-respuesta">
                            <span class="span-after">frut</span>
                            <div class="palabra" alt="frut">

                            </div>
                        </div>
                        <div class="contenedor-respuesta">
                            <span class="span-after">frut</span>
                            <div class="palabra" alt="frut">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="zap">atería</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="zap">atero</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pan">adero</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pan">etón</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="frut">as</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="frut">ero</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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