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
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Las</option>
                                        <option value="x">Los</option>
                                        <option value="x">La</option>
                                        <option value="x">El</option>
                                    </select>
                                </span>
                                Serpientes
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Masculino</option>
                                        <option value="n">Femenino</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Las</option>
                                        <option value="n">Los</option>
                                        <option value="x">La</option>
                                        <option value="x">El</option>
                                    </select>
                                </span>
                                Profesores
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Masculino</option>
                                        <option value="x">Femenino</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Las</option>
                                        <option value="x">Los</option>
                                        <option value="n">La</option>
                                        <option value="x">El</option>
                                    </select>
                                </span>
                                Alegría
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Masculino</option>
                                        <option value="n">Femenino</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Las</option>
                                        <option value="x">Los</option>
                                        <option value="x">La</option>
                                        <option value="n">El</option>
                                    </select>
                                </span>
                                Diccionario
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Masculino</option>
                                        <option value="x">Femenino</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

<div class="contenedor-texto">
    <p>
        <span>
            <select class="browser-default seleccion" alt="n">
                <option value="" disabled selected>Escoge una opción</option>
                <option value="x">Las</option>
                <option value="x">Los</option>
                <option value="x">La</option>
                <option value="n">El</option>
            </select>
        </span>
        Calor
        <span>
            <select class="browser-default seleccion" alt="n">
                <option value="" disabled selected>Escoge una opción</option>
                <option value="n">Masculino</option>
                <option value="x">Femenino</option>
            </select>
        </span>
    </p>
</div>
</div>
<div class="ejercicio-item">

<div class="contenedor-texto">
    <p>
        <span>
            <select class="browser-default seleccion" alt="n">
                <option value="" disabled selected>Escoge una opción</option>
                <option value="x">Las</option>
                <option value="x">Los</option>
                <option value="n">La</option>
                <option value="x">El</option>
            </select>
        </span>
        Flor
        <span>
            <select class="browser-default seleccion" alt="n">
                <option value="" disabled selected>Escoge una opción</option>
                <option value="x">Masculino</option>
                <option value="n">Femenino</option>
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
function result_tipo_4_1_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 12) {
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