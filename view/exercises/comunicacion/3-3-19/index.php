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
                        <th>x</th>
                        <th>Peces</th>
                        <th>Anfibios</th>
                        <th>Reptiles</th>
                        <th>Mamíferos</th>
                        <th>Aves</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Nacen de huevos</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Viven en el agua</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Caminan</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Se alimentan de leche</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Vuelan</span>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="x">
                                   
                                </li>
                            </ul>
                        </td>
                        <td>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x" alt="n">
                                   
                                </li>
                            </ul>
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
function result_tipo_3_3_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
    if (r == 11) {
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