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

                        <span class="span-after">as</span>
                        <div class="palabra" alt="co">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">la</span>
                        <div class="palabra" alt="ca">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>lí</span>
                        <div class="palabra" alt="qui">

                        </div>
                        <span class="span-after">do</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="que">

                        </div>
                        <span class="span-after">mado</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">mani</span>
                        <div class="palabra" alt="co">

                        </div>
                        <span class="span-after">mio</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">me</span>
                        <div class="palabra" alt="ca">

                        </div>
                        <span class="span-after">ni</span>
                        <div class="palabra" alt="co">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="ca">

                        </div>
                        <span class="span-after">bina</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">pe</span>

                        <div class="palabra" alt="que">

                        </div>
                        <span class="span-after">ño</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="cu">

                        </div>
                        <span class="span-after">ento</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">po</span>

                        <div class="palabra" alt="co">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">bi</span>

                        <div class="palabra" alt="qui">

                        </div>
                        <span class="span-after">ni</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">mante</span>

                        <div class="palabra" alt="qui">

                        </div>
                        <span class="span-after">lla</span>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="co">co</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ca">ca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="qui">qui</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="que">que</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="co">co</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ca">ca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="co">co</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ca">ca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="que">que</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cu">cu</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="co">co</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="qui">qui</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="qui">qui</h4>
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
function result_tipo_2_3_13() {
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