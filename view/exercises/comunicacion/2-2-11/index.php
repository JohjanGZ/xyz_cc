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
                <div class="ejemplo">
                    <span>breve</span>
                    <span>azúcar</span>
                    <span>solidificar</span>
                    <span>tonificante</span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="so">
                        x
                    </span>
                    <span class="respuesta" alt="li">
                        x
                    </span>
                    <span class="respuesta" alt="di">
                        x
                    </span>
                    <span class="respuesta" alt="fi">
                        x
                    </span>
                    <span class="respuesta tonica" alt="car">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta tonica" alt="bre">
                        x
                    </span>
                    <span class="respuesta" alt="ve">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="a">
                        x
                    </span>
                    <span class="respuesta tonica" alt="zu">
                        x
                    </span>
                    <span class="respuesta" alt="car">
                        x
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="to">
                        x
                    </span>
                    <span class="respuesta" alt="ni">
                        x
                    </span>
                    <span class="respuesta" alt="fi">
                        x
                    </span>
                    <span class="respuesta tonica" alt="can">
                        x
                    </span>
                    <span class="respuesta" alt="te">
                        x
                    </span>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="bre">bre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ve">ve</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="a">a</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="zu">zú</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="car">car</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="so">so</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="li">li</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="di">di</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fi">fi</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="car">car</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="to">to</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ni">ni</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fi">fi</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="can">can</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="te">te</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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