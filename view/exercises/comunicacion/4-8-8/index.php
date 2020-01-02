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
            <div class="contenedor-tabla">


                <table>
                    <tr>
                        <th>
                            <span>N°</span>
                        </th>
                        <th>
                            <span>Paso</span>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Formar grupos e investigar sobre el tema seleccionado.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="n">4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Participar en forma ordenada respetando el punto de vista de los demás.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Elegir un tema de interés.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Escoger un moderador que coordine las preguntas y dé la
                            palabra a cada participante.
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
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});

// Validar
function result_tipo_4_8_8() {
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