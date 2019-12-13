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

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                La tarea estuvo muy difícil. <br> 
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">información</option>
                                        <option value="x">sorpresa o emoción</option>
                                        <option value="x">interrogación</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="ejercicio-item">

                            <div class="contenedor-texto">
                                <p>
                                    ¡Ten cuidado con ese auto! <br>
                                    <span>
                                        <select class="browser-default" alt="n">
                                            <option value="" disabled selected>Escoge una opción</option>
                                            <option value="x">información</option>
                                            <option value="n">sorpresa o emoción</option>
                                            <option value="x">interrogación</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¡Qué tarde llegaste hoy! <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">información</option>
                                        <option value="n">sorpresa o emoción</option>
                                        <option value="x">interrogación</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¿Qué vamos a hacer hoy? <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">información</option>
                                        <option value="x">sorpresa o emoción</option>
                                        <option value="n">interrogación</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="ejercicio">

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                No podré acompañarte porque estoy enfermo. <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">información</option>
                                        <option value="x">sorpresa o emoción</option>
                                        <option value="x">interrogación</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¿Qué es lo que te preocupa? <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">información</option>
                                        <option value="x">sorpresa o emoción</option>
                                        <option value="n">interrogación</option>
                                    </select>
                                </span>
                            </p>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_7_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

    if (r == 6) {
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