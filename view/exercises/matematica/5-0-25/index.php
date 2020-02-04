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
                            Deporte \ Estudiante
                        </th>
                        <th>
                            Niños
                        </th>
                        <th>
                            Niñas
                        </th>
                    </tr>
                    <tr>
                        <td>
                            Fútbol
                        </td>
                        <td>
                            40
                        </td>
                        <td>
                            10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Básquet
                        </td>
                        <td>
                            10
                        </td>
                        <td>
                            30
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tenis
                        </td>
                        <td>
                            10
                        </td>
                        <td>
                            10
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Voley
                        </td>
                        <td>
                            10
                        </td>
                        <td>
                            40
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Natación
                        </td>
                        <td>
                            20
                        </td>
                        <td>
                            20
                        </td>
                    </tr>

                </table>

                <div class="contenedor-ejerciciosx">
                    <div class="ejercicio">
                        <p>
                        ¿Cuál es el deporte preferido por las niñas? &nbsp;&nbsp;
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">Voley</option>
                                    <option value="x">Fútbol</option>
                                    <option value="x">Tenis</option>
                                    <option value="x">Natación</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                        ¿Cuántos estudiantes prefieren básket?
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">20 estudiantes</option>
                                    <option value="x">30 estudiantes</option>
                                    <option value="n">40 estudiantes</option>
                                    <option value="x">10 estudiantes</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                        ¿Cuántas mas niñas que niños prefieren voley? &nbsp;&nbsp;&nbsp;&nbsp;
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">20 niñas</option>
                                    <option value="x">0 niñas</option>
                                    <option value="x">10 niñas</option>
                                    <option value="n">30 niñas</option>
                                </select>
                            </span>
                            )
                        </p>
                    </div>
                    <div class="ejercicio">
                        <p>
                        ¿Cuál es el deporte preferido por los niños?
                        </p>
                        <p>
                            (
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">Tenis</option>
                                    <option value="x">Natación</option>
                                    <option value="n">Fútbol</option>
                                    <option value="x">Voley</option>
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
function result_tipo_5_0_25() {
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