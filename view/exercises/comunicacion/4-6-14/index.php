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
                            <ul>
                                <li>
                                    <b>EFECTO:</b>
                                </li>
                                <li>
                                    Ha salido el arco iris.
                                </li>

                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                <b>CAUSA:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Es un día soleado.</option>
                                    <option value="n">Ha estado lloviendo.</option>
                                    <option value="x">Ha habido una tormenta eléctrica.</option>
                                    <option value="x">Es un día tranquilo.</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item celeste">
                        <div class="palabras">
                            <ul>
                                <li>
                                    <b>EFECTO:</b>
                                </li>
                                <li>
                                    Ir al médico.
                                </li>

                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                <b>CAUSA:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Estoy enfermo.</option>
                                    <option value="x">Estoy en buen estado.</option>
                                    <option value="x">Soy médico.</option>
                                    <option value="x">Mi hermano es el médico.</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item amarillo">
                        <div class="palabras">
                            <ul>
                                <li>
                                    <b>EFECTO:</b>
                                </li>
                                <li>
                                    Bajar de peso.
                                </li>

                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                <b>CAUSA:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Es bueno para la salud.</option>
                                    <option value="x">Mi novia lo pidió.</option>
                                    <option value="n">Hice ejercicio.</option>
                                    <option value="x">Me lo dijo el médico.</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item verde">
                        <div class="palabras">
                            <ul>
                                <li>
                                    <b>EFECTO:</b>
                                </li>
                                <li>
                                    Aprobar un examen.
                                </li>

                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                <b>CAUSA:</b>
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Sé cantar bien.</option>
                                    <option value="x">Tengo mucha suerte.</option>
                                    <option value="x">Jugué con mis amigos.</option>
                                    <option value="n">Estudié mucho.</option>
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
function result_tipo_4_6_14() {
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