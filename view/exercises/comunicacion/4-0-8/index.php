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
                            La profesora López explica a los alumnos las características del agua.
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
                                        <option value="x">Los alumnos</option>
                                        <option value="n">La profesora López</option>
                                        <option value="x">Las características del agua</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Receptor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Los alumnos</option>
                                        <option value="x">La profesora López</option>
                                        <option value="x">Las características del agua</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Mensaje:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Los alumnos</option>
                                        <option value="x">La profesora López</option>
                                        <option value="n">Las características del agua</option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <h4>
                        Raúl escucha por radio las noticias que el locutor narra.
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
                                        <option value="x">las noticias</option>
                                        <option value="x">Raúl</option>
                                        <option value="n">El locutor</option>
                                    </select>
                                </span>

                            </p>
                            <p>
                                Receptor:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">las noticias</option>
                                        <option value="n">Raúl</option>
                                        <option value="x">El locutor</option>
                                    </select>
                                </span>
                            </p>
                            <p>
                                Mensaje:
                                <span>
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">las noticias</option>
                                        <option value="x">Raúl</option>
                                        <option value="x">El locutor</option>
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
function result_tipo_4_0_8() {
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