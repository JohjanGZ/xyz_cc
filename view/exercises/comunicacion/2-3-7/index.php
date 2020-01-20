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

                        <td></td>
                        <td></td>
                        <td class="table-item">
                            <div class="table-respuesta table-titulo" alt="titulo"></div>
                        </td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td></td>
                        <td></td>
                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td class="table-item">
                            <div class="table-respuesta" alt="estado" numero="uno"></div>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <div class="table-respuesta" alt="estado" numero="dos"></div>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <div class="table-respuesta" alt="estado" numero="tres"></div>
                        </td>

                    </tr>
                    <tr>

                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>
                        <td></td>
                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>

                    </tr>
                    <tr>

                        <td class="table-item ti-last">
                            <div class="table-respuesta table-last uno" alt="x"></div>
                        </td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta table-last dos" alt="s"></div>
                        </td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta table-last tres" alt="d"></div>
                        </td>

                    </tr>

                </table>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="titulo">Estados del agua</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="estado" estado="gaseoso">Gaseoso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="estado" estado="solido">Sólido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="estado" estado="liquido">Líquido</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="gaseoso">vapor</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="solido">Hielo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="liquido">Agua</h4>
                </li>
            </ul>
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
function result_tipo_2_3_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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