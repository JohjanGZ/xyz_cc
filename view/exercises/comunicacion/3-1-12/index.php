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
                    <p class="palabras-ejemplo"> satisfecho, útil, universidad, cuaderno </p>

                    <div class="contenedor-respuesta">
                        <p>
                            <span class="palabra" alt="u">x</span><span class="palabra" alt="ni">x</span><span
                                class="palabra" alt="ver">x</span><span class="palabra" alt="si">x</span><span
                                class="palabra tonica" alt="dad">x</span> <br>
                            <span class="palabra tonica" alt="x">x</span><span class="palabra"
                                alt="til">x</span> <br>
                            <span class="palabra" alt="cua">x</span><span class="palabra tonica"
                                alt="der">x</span><span class="palabra" alt="no">x</span> <br>
                            <span class="palabra" alt="sa">x</span><span class="palabra"
                                alt="tis">x</span><span class="palabra tonica" alt="fe">x</span><span
                                class="palabra" alt="cho">x</span> <br>
                        </p>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="sa">sa</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tis">tis</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fe">fe</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cho">cho</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">ú</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="til">til</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="u">u</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ni">ni</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ver">ver</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="si">si</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dad">dad</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cua">cua</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="der">der</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="no">no</h4>
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
function result_tipo_3_1_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 14) {
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