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
                        <td rowspan="2" class="borde">
                            <span class="respuesta" alt="n"></span>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td rowspan="2" class="borde">
                            <span class="respuesta" alt="n"></span>
                        </td>
                    </tr>
                    <tr>


                        <td class="borde-esquina-derecha">
                        </td>
                        <td>
                        </td>
                        <td class="borde-esquina-izquierda">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td class="borde">
                            <span class="titulo" alt="futuro"><span>Instrumentos Musicales</span></span>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="borde">
                            <span class="respuesta" alt="n"></span>
                        </td>
                        <td class="borde-esquina-derecha-bottom">
                        </td>
                        <td>
                        </td>
                        <td  class="borde-esquina-izquierda-bottom">
                        </td>
                        <td rowspan="2" class="borde">
                            <span class="respuesta" alt="n"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td>
                        </td>
                    </tr>


                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="n">
                    guitarra
                </span>
                <span class="palabra pieza" alt="n">
                    batería
                </span>
                <span class="palabra pieza" alt="n">
                    bajo
                </span>
                <span class="palabra pieza" alt="n">
                    tambores
                </span>
                <span class="palabra pieza" alt="x">
                    pizarra
                </span>
                <span class="palabra pieza" alt="x">
                    auto
                </span>
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
function result_tipo_2_9_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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