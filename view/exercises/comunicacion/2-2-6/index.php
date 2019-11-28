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
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <div class="contenedor-respuesta">
                        <div class="palabras">
                            <span class="palabra" alt="su">

                            </span>
                            <span class="palabra" alt="cio">

                            </span>
                        </div>
                        <div class="palabras">
                            <span class="palabra" alt="man">

                            </span>
                            <span class="palabra" alt="cha">

                            </span>
                            <span class="palabra" alt="do">

                            </span>
                        </div>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="su">su</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="cha">cha</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="man">man</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="cio">cio</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="do">do</h4>
                        </li>
                    </ul>
                </div>
                <div class="ejercicio">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <div class="contenedor-respuesta">
                        <div class="palabras">
                            <span class="palabra" alt="o">

                            </span>
                            <span class="palabra" alt="ir">

                            </span>
                        </div>
                        <div class="palabras">
                            <span class="palabra" alt="es">

                            </span>
                            <span class="palabra" alt="cu">

                            </span>
                            <span class="palabra" alt="char">

                            </span>
                        </div>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="char">char</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="cu">cu</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="o">o</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="es">es</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="ir">ír</h4>
                        </li>
                    </ul>
                </div>
                <div class="ejercicio">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <div class="contenedor-respuesta">
                        <div class="palabras">
                            <span class="palabra" alt="a">

                            </span>
                            <span class="palabra" alt="x">

                            </span>
                        </div>
                        <div class="palabras">
                            <span class="palabra" alt="a">

                            </span>
                            <span class="palabra" alt="x">

                            </span>
                        </div>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="a">a</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="x">quí</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="x">cá</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="a">a</h4>
                        </li>
                    </ul>
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
function result_tipo_2_2_6() {
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