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
                                    <option value="n">L. Literario</option>
                                    <option value="x">L. No Literario</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            ¿Qué es la vida? Un frenesí./¿Qué es la vida? una ilusión,/ una sombra, una ficción./ Y el
                            mayor bien es pequeño,/ que toda la vida es sueño,/ y los sueños, sueños son.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">L. Literario</option>
                                    <option value="n">L. No Literario</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            El "Poema XX" de Pablo Neruda es mi favorito por la gran musicalidad que tiene.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">L. Literario</option>
                                    <option value="n">L. No Literario</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            La pena es un dolor propio del alma humana después de atravesar momentos de
                            angustia.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">L. Literario</option>
                                    <option value="x">L. No Literario</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            Todo pasa y todo queda,/ pero lo nuestro es pasar,/ pasar haciendo caminos,/ camino sobre el
                            mar.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">L. Literario</option>
                                    <option value="n">L. No Literario</option>
                                </select>
                            </span>
                        </td>
                        <td>
                            El tomar café es una costumbre después del trabajo o una necesidad previa al inicio del día.
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
function result_tipo_5_0_17() {
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