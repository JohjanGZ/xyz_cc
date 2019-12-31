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
                    <div class="ejercicio-item rosa">
                        <div class="palabras">
                            
                            <img src="<?= $dir ?>/img/1.png" alt="">

                        </div>
                        <div class="semantico">
                            <p>
                                <b>Causa:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Luz escasa.</option>
                                    <option value="x">Vehículos muy grandes.</option>
                                    <option value="n">Choferes distraídos.</option>
                                </select>
                            </span>
                            <p>
                                <b>Efecto:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Choferes heridos</option>
                                    <option value="n">Choque de autos</option>
                                    <option value="x">Choque triple</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item celeste">
                        <div class="palabras">
                            
                            <img src="<?= $dir ?>/img/2.png" alt="">

                        </div>
                        <div class="semantico">
                            <p>
                                <b>Causa:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Niño sufrió accidente</option>
                                    <option value="x">Niño feliz</option>
                                    <option value="x">Niño estudioso</option>
                                </select>
                            </span>
                            <p>
                                <b>Efecto:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Niño con buena salud</option>
                                    <option value="x">Niño con buenas notas</option>
                                    <option value="n">Niño con fracturas</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item amarillo">
                        <div class="palabras">
                            
                            <img src="<?= $dir ?>/img/3.png" alt="">

                        </div>
                        <div class="semantico">
                            <p>
                                <b>Causa:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Niño es desobediente</option>
                                    <option value="x">Niño que estudia mucho</option>
                                    <option value="n">Niño que practica mucho deporte</option>
                                </select>
                            </span>
                            <p>
                                <b>Efecto:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Niño pierde competencia</option>
                                    <option value="n">Niño gana competencia</option>
                                    <option value="x">Niño aprueba examen</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item verde">
                        <div class="palabras">
                            
                            <img src="<?= $dir ?>/img/4.png" alt="">

                        </div>
                        <div class="semantico">
                            <p>
                                <b>Causa:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Gente que arroja basura al río</option>
                                    <option value="x">Gente que limpia el río</option>
                                    <option value="x">Gente que que bota la basura al tacho</option>
                                </select>
                            </span>
                            <p>
                                <b>Efecto:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">El río está sucio</option>
                                    <option value="x">El río está limpio</option>
                                    <option value="x">La basura es reciclada</option>
                                </select>
                            </span>
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
function result_tipo_4_6_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 8) {
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