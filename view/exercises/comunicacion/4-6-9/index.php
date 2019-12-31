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

            <table>
                <tr>
                    <th>
                        Formas simples
                    </th>
                    <th>
                        Formas compuestas
                    </th>
                </tr>
                <tr>
                    <td>
                        <span class="palabra contenedor" alt="simple">

                        </span>
                    </td>
                    <td>
                        <span class="palabra contenedor" alt="compuesto">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="palabra contenedor" alt="simple">

                        </span>
                    </td>
                    <td>
                        <span class="palabra contenedor" alt="compuesto">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="palabra contenedor" alt="simple">

                        </span>
                    </td>
                    <td>
                        <span class="palabra contenedor" alt="compuesto">

                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="palabra contenedor" alt="simple">

                        </span>
                    </td>
                    <td>
                        <span class="palabra contenedor" alt="compuesto">

                        </span>
                    </td>
                </tr>
            </table>

            <div class="contenedor-imagenes">
                <span class="imagen pieza" alt="simple">
                    caminaron
                </span>
                <span class="imagen pieza" alt="compuesto">
                    has oído
                </span>
                <span class="imagen pieza" alt="simple">
                    patinas
                </span>
                <span class="imagen pieza" alt="compuesto">
                    ha cocinado
                </span>
                <span class="imagen pieza" alt="simple">
                    observas
                </span>
                <span class="imagen pieza" alt="compuesto">
                    han llegado
                </span>
                <span class="imagen pieza" alt="simple">
                    pintaron
                </span>
                <span class="imagen pieza" alt="compuesto">
                    hemos cantado
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
function result_tipo_4_6_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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