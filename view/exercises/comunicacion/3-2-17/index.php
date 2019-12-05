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
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Pelar las papas sancochadas y, cuando enfríen, cortarlas en
                                tajadas.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Colocar en la licuadora el ají, el ajo y la cebolla. Luego,
                                licuar los ingredientes.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="n">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente"> Agregar sal al gusto y unas gotas de limón.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="n">6</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Lavar bien las papas y sancocharlas.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Agregar, a la mezcla anterior, trozos de queso fresco, galletas y leche.  Continuar licuando.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="n">5</option>
                                    <option value="x">6</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Servir colocando las tajadas de papa y la salsa. Decorar con aceitunas y  huevo sancochado.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                    <option value="n">7</option>
                                </select>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Freír dos ajíes verdes previamente despepitados, tres dientes de ajo y la  cebolla. Dejar enfriar.</span>
                        </td>

                        <td>
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                    <option value="x">5</option>
                                    <option value="x">6</option>
                                    <option value="x">7</option>
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
function result_tipo_3_2_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
    if (r == 7) {
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