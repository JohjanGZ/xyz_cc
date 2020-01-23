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
                                <span class="celeste">●</span>
                                Yo
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">
                                            canto
                                        </option>
                                        <option value="n">
                                            he cantado
                                        </option>
                                        <option value="x">
                                            hemos cantado
                                        </option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span class="celeste">●</span>
                                Tú
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">
                                            cantaste
                                        </option>
                                        <option value="n">
                                            has cantado
                                        </option>
                                        <option value="x">
                                            han cantado
                                        </option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span class="celeste">●</span>
                                Él
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">
                                            ha cantado
                                        </option>
                                        <option value="x">
                                            cantó
                                        </option>

                                        <option value="x">
                                            ha cantar
                                        </option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span class="celeste">●</span>
                                Nosotros
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">
                                            cantamos
                                        </option>
                                        <option value="x">
                                            han cantado
                                        </option>
                                        <option value="n">
                                            hemos cantado
                                        </option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>

                </div>
                <div class="ejercicio" style="padding-top: 0;">

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span class="celeste">●</span>
                                Ustedes
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">
                                            cantan
                                        </option>
                                        
                                        <option value="x">
                                            ha cantado
                                        </option>
                                        <option value="n">
                                            han cantado
                                        </option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                <span class="celeste">●</span>
                                Ellos
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">
                                            han cantado
                                        </option>
                                        <option value="x">
                                            has cantaron
                                        </option>
                                        <option value="x">
                                            hemos cantado
                                        </option>
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
function result_tipo_4_6_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
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