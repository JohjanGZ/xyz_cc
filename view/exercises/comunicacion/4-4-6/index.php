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
                                    Melocotón
                                </li>
                                <li>
                                    Pera
                                </li>
                                <li>
                                    Albaricoque
                                </li>
                                <li>
                                    Melón
                                </li>
                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Útiles escolares</option>
                                    <option value="n">Frutas</option>
                                    <option value="x">Animales</option>
                                    <option value="x">Flores</option>
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
                                    Lápices
                                </li>
                                <li>
                                    Goma
                                </li>
                                <li>
                                    Colores
                                </li>
                                <li>
                                    Bolígrafo
                                </li>
                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Útiles escolares</option>
                                    <option value="x">Frutas</option>
                                    <option value="x">Animales</option>
                                    <option value="x">Flores</option>
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
                                    Tulipán
                                </li>
                                <li>
                                    Rosa
                                </li>
                                <li>
                                    Margarita
                                </li>
                                <li>
                                    Clavel
                                </li>
                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Útiles escolares</option>
                                    <option value="x">Frutas</option>
                                    <option value="x">Animales</option>
                                    <option value="n">Flores</option>
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
                                    Tigre
                                </li>
                                <li>
                                    Ballena
                                </li>
                                <li>
                                    Oso
                                </li>
                                <li>
                                    Leopardo
                                </li>
                            </ul>
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Útiles escolares</option>
                                    <option value="x">Frutas</option>
                                    <option value="n">Animales</option>
                                    <option value="x">Flores</option>
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
function result_tipo_4_4_6() {
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