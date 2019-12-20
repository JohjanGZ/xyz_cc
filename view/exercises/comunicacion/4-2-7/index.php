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
                        <th colspan="4">
                            <span>Subir</span>
                        </th>
                    </tr>
                    <tr>

                        <td>
                            <span class="respuesta seleccion" alt="x">
                                disminuir
                            </span>

                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="x">
                                bajar
                            </span>
                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="n">
                                aumentar
                            </span>
                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="x">
                                alegrar
                            </span>
                        </td>
                    </tr>


                </table>
                <table>
                    <tr>
                        <th colspan="4">
                            <span>Medir</span>
                        </th>
                    </tr>
                    <tr>

                        <td>
                            <span class="respuesta seleccion" alt="n">
                                calcular
                            </span>

                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="x">
                                confeccionar
                            </span>
                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="x">
                                preparar
                            </span>
                        </td>
                        <td>
                            <span class="respuesta seleccion" alt="x">
                                sospechar
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
function result_tipo_4_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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