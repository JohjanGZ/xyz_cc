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
                                Recalentar: <br> 
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Volver a calentar una cosa</option>
                                        <option value="x">Calentar una cosa</option>
                                        <option value="x">Mantener caliente una cosa</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="ejercicio-item">

                            <div class="contenedor-texto">
                                <p>
                                    Descongelar: <br>
                                    <span>
                                        <select class="browser-default" alt="n">
                                            <option value="" disabled selected>Escoge una opción</option>
                                            <option value="x">Derretir el hielo</option>
                                            <option value="n">Hacer que algo deje de estar congelado</option>
                                            <option value="x">Hacer que algo se congele</option>
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
                                Submarino: <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Aquello que está sobre la superficie del mar</option>
                                        <option value="x">Embarcación de uso militar</option>
                                        <option value="n">Zona que está por debajo de la superficie del mar</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Releer <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Leer muchas cosas</option>
                                        <option value="x">Leer un texto largo</option>
                                        <option value="n">Volver a leer algo</option>
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
                                Subjefe: <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Persona que es inferior al jefe</option>
                                        <option value="n">Persona que ocupa un cargo inmediatamente inferior al de jefe</option>
                                        <option value="x">Aquel que está al mando de un proyecto</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Descolgar: <br>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Eliminar aquello que cuelga</option>
                                        <option value="x">Poner una cosa en un lugar colgante</option>
                                        <option value="n">Quitar una cosa del lugar donde cuelga</option>
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
function result_tipo_4_0_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
        console.log(r);

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