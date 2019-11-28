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

                <div class="secuencia">
                    <span class="palabra">
                        <b><i>ge 🠲</i></b>
                    </span>
                    <span class="respuesta" alt="ge">

                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra">
                        <b><i>gi 🠲</i></b>
                    </span>
                    <span class="respuesta" alt="gi">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra">
                        <b><i>je 🠲</i></b>
                    </span>
                    <span class="respuesta" alt="je">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra">
                        <b><i>ji 🠲</i></b>
                    </span>
                    <span class="respuesta" alt="ji">
                        x
                    </span>
                </div>

            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="gi">gigante</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gi">girasol</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ge">geranio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ge">gente</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="je">ejercicio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="je">equipaje</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ji">jinete</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ji">jilguero</h4>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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