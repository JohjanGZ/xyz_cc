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
                        <h4 class="pieza" alt="x">¡</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="x">¡</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="x">¡</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="y">!</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="y">!</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="y">!</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="q">¿</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="q">¿</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="w">?</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="w">?</h4>
                    </li>
                </ul>
                <div class="contenedor-img">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
            </div>

            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="x">

                        </div>
                        <span class="span-after">Qúe bonito lugar</span>

                        <div class="palabra" alt="y">

                        </div>
                        <span class="span-after">Voy a dibujarlo.</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="x">

                        </div>
                        <span class="span-after">Me encanta el campo</span>

                        <div class="palabra" alt="y">

                        </div>
                        <span>Es tranquilo.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="x">

                        </div>
                        <span class="span-after">Qúe bien</span>

                        <div class="palabra" alt="y">

                        </div>
                        <span>Mañana hay fiesta.</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="q">

                        </div>
                        <span class="span-after">Quién es</span>

                        <div class="palabra" alt="w">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="q">

                        </div>
                        <span class="span-after">Cómo estás abuela</span>

                        <div class="palabra" alt="w">

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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_9_8() {
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