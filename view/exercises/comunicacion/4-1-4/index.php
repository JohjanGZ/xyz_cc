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
                                ¿Cómo se llamaba el mozo? <br>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Pablo</option>
                                        <option value="n">Pedro</option>
                                        <option value="x">Paulo</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¿A dónde fue el mozo? <br>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Al colegio</option>
                                        <option value="x">Al campo</option>
                                        <option value="n">Al mercado</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>


                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¿Qué le mandó a comprar el caballero al mozo? <br>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Uvas y ¡Ay!</option>
                                        <option value="x">Uvas y Ortiga</option>
                                        <option value="x">Uvas y fresas</option>
                                        <option value="x">Uvas y ¡Au!</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                ¿Qué le entregó el mozo a su amo? <br>
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Uvas y ¡Ay!</option>
                                        <option value="n">Uvas y Ortiga</option>
                                        <option value="x">Uvas y fresas</option>
                                        <option value="x">Uvas y ¡Au!</option>
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
function result_tipo_4_1_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
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