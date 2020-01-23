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
                        <h4>
                            Jaime recibe una carta de Ana que dice que ha aprobado todas sus asignaturas.
                        </h4>
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Emisor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Jaime</option>
                                        <option value="n">Ana</option>
                                        <option value="x">Asignaturas aprobadas</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Receptor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Jaime</option>
                                        <option value="x">Ana</option>
                                        <option value="x">Asignaturas aprobadas</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Mensaje:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Jaime</option>
                                        <option value="x">Ana</option>
                                        <option value="n">Asignaturas aprobadas</option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <h4>
                        Un conductor encuentra esta señal en un cruce de carreteras.
                        </h4>
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Emisor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Debe parar</option>
                                        <option value="x">El conductor</option>
                                        <option value="n">La señal</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Receptor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Debe parar</option>
                                        <option value="n">El conductor</option>
                                        <option value="x">La señal</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Mensaje:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Debe parar</option>
                                        <option value="x">El conductor</option>
                                        <option value="x">La señal</option>
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
function result_tipo_4_0_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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