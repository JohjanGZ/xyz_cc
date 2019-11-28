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
                        <h4 class="pieza" alt="">8</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="">11</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="x">10</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="y">6</h4>
                    </li>

                </ul>
                <div class="contenedor-img">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
            </div>

            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        
                        <p>- ¡Hola Claudia!, ¡Cuánto tiempo sin verte!</p>
                        <p>- ¡Hola Roberto!, ¿Cómo estás?</p>
                        <p>- ¡Estupendamente!, ¿Y tú?</p>
                        <p>- ¡De maravilla!, ¿Te vienes al parque?</p>
    
                    </div>
                </div>
                <div class="contenedor-preguntas">
                    <div class="pregunta">
                        <p>Interrogación: <span class="palabra" alt="y">x</span></p>
                    </div>
                    <div class="pregunta">
                        <p>Exclamación: <span class="palabra" alt="x">x</span></p>
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
function result_tipo_1_8_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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