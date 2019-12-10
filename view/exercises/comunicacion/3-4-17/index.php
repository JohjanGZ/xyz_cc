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
                        <td colspan="3" class="table-item">
                            <span>La leche</span>
                        </td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td class="table-item">
                            <span>es..</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <span>Puedes obtener..</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <span>Viene en..</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <span>Con ella puedes..</span>
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
                        <td></td>
                        <td>
                            <div class="table-linea-vertical"></div>
                        </td>

                    </tr>
                    <tr>

                        <td class="table-item ti-last">
                            <div class="table-respuesta" alt="uno"></div>
                            <div class="table-respuesta" alt="uno"></div>

                        </td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta" alt="dos"></div>
                            <div class="table-respuesta" alt="dos"></div>
                            <div class="table-respuesta" alt="dos"></div>
                        </td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta" alt="tres"></div>
                            <div class="table-respuesta" alt="tres"></div>
                            <div class="table-respuesta" alt="tres"></div>
                        </td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta" alt="cuatro"></div>
                            <div class="table-respuesta" alt="cuatro"></div>
                        </td>
                    </tr>

                </table>

            </div>
            <ul class="contenedor-silabas">
                
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Evaporada</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Fresca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">yogurt</h4>
                </li>

                <li class="silabas">
                    <h4 class="pieza" alt="dos">queso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">mantequilla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">botella</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">caja</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">lata</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">beber</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">cocinar</h4>
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
function result_tipo_3_4_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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