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
                        <span>ca</span>
                        <div class="palabra" alt="r">

                        </div>
                        <span class="span-after">peta</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="r">

                        </div>
                        <span class="span-after">ec</span>
                        <div class="palabra" alt="r">

                        </div>
                        <span>eo</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>u</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span>aca</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>zo</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span>o</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="r">

                        </div>
                        <span class="span-after">aquel</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>e</span>
                        <div class="palabra" alt="r">

                        </div>
                        <span class="span-after">izo</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>hon</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span class="span-after">ado</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>guita</span>
                        <div class="palabra" alt=rr>

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>te</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span class="span-after">aza</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>acu</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span class="span-after">ucar</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="r">

                        </div>
                        <span class="span-after">onquido</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>bu</span>
                        <div class="palabra" alt="rr">

                        </div>
                        <span class="span-after">o</span>
                    </div>
                </div>


            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rr">rr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="r">r</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_7_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 13) {
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