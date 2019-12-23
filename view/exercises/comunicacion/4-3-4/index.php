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
                                Mañana llegaremos <span class="color">primero</span> a la ciudad de Pisco. - 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Adición</option>
                                        <option value="n">Secuencia</option>
                                        <option value="x">Causa</option>
                                        <option value="x">Contraste</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Lee el libro, <span class="color">luego</span> respondes a las preguntas. - 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Adición</option>
                                        <option value="n">Secuencia</option>
                                        <option value="x">Causa</option>
                                        <option value="x">Contraste</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Tengo mucho calor, <span class="color">por eso</span> me quitaré la chompa. - 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Adición</option>
                                        <option value="x">Secuencia</option>
                                        <option value="n">Causa</option>
                                        <option value="x">Contraste</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Vienes a mi casa el lunes, <span class="color">también</span> el martes. - 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Adición</option>
                                        <option value="x">Secuencia</option>
                                        <option value="x">Causa</option>
                                        <option value="x">Contraste</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Yo haré mis ejercicios <span class="color">mientras</span> tú estudias para el examen. - 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Adición</option>
                                        <option value="n">Secuencia</option>
                                        <option value="x">Causa</option>
                                        <option value="x">Contraste</option>
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
function result_tipo_4_3_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 5) {
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