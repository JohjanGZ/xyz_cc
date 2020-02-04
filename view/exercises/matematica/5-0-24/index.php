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

                <table>
                    <tr>
                        <th>
                            Persona
                        </th>
                        <th>
                            Edad
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Julisa
                        </td>
                        <td>
                            13 años
                        </td>
                    </tr>
                    <tr>
                        <td>
                            José
                        </td>
                        <td>
                            15 años
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ariana
                        </td>
                        <td>
                            13 años
                        </td>
                    </tr>

                </table>

                <div class="contenedor-ejerciciosx">
                    <div class="ejercicio">
                        <p>
                            • Las personas no representan las unidades de observación. &nbsp;&nbsp;
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">V</option>
                                    <option value="n">F</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                            • Las edades representan los datos u observaciones.
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                            • 13 años es un dato.
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                            • "José" es una unidad de observación.
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">V</option>
                                    <option value="x">F</option>
                                </select>
                            </span>
                            )
                        </p>
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
function result_tipo_5_0_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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