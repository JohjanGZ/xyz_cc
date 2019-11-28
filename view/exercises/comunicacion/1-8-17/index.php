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
                        <span>In</span>
                        <div class="palabra" alt="gla">

                        </div>
                        <span>terra</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>Ne</span>
                        <div class="palabra" alt="gli">

                        </div>
                        <span>gente</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="glo">

                        </div>
                        <span>ria</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="gla">

                        </div>
                        <span>cial</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>I</span>
                        <div class="palabra" alt="gle">

                        </div>
                        <span>sia</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="glo">

                        </div>
                        <span>tón</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="gli">

                        </div>
                        <span>cerina</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>Jun</span>
                        <div class="palabra" alt="gla">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>Si</span>

                        <div class="palabra" alt="glo">

                        </div>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="gla">gla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gli">gli</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="glo">glo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gla">gla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gle">gle</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="glo">glo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="glo">glo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gli">gli</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gla">gla</h4>
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
function result_tipo_1_8_17() {
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