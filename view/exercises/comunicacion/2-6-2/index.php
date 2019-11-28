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

                    <span class="respuesta" alt="uno">
                        x
                    </span>
                    <span class="palabra">
                        Lava muy bien las frutas.
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="dos">
                        x
                    </span>
                    <span class="palabra">
                        Pela los plátanos y las mandarinas.
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="tres">
                        x
                    </span>
                    <span class="palabra">
                        Desprende las uvas y los gajos, corta el plátano.
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="cuatro">
                        x
                    </span>
                    <span class="palabra">
                        Añade azúcar, canela y limón.
                    </span>
                </div>

            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">1</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">2</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">3</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">4</h4>
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
function result_tipo_2_6_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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