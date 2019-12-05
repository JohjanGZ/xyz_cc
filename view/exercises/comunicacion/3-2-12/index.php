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
                        <th>Palabra</th>
                        <th>N° Sílabas</th>
                        <th>Concurrencia vocálica</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Puente</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                    <span>1</span>
                                </li>
                                <li class="palabra-x" alt="n">
                                    <span>2</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>3</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>4</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Diptongo</option>
                                    <option value="x">Hiato</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Aéreo</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                    <span>1</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>2</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>3</span>
                                </li>
                                <li class="palabra-x" alt="n">
                                    <span>4</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Diptongo</option>
                                    <option value="n">Hiato</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Ciudado</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                    <span>1</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>2</span>
                                </li>
                                <li class="palabra-x" alt="n">
                                    <span>3</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>4</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">Diptongo</option>
                                    <option value="x">Hiato</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Creído</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                    <span>1</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>2</span>
                                </li>
                                <li class="palabra-x" alt="n">
                                    <span>3</span>
                                </li>
                                <li class="palabra-x" alt="x">
                                    <span>4</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Diptongo</option>
                                    <option value="n">Hiato</option>
                                </select>
                            </span>
                        </td>
                    </tr>

                </table>

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
function result_tipo_3_2_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
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