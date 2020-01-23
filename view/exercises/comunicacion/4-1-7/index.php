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
                            <span>El agua</span>
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
                            <span>No tiene..</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <span>Puede ser..</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <span>Está en..</span>
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
                            <div class="table-respuesta" alt="cuatro"></div>
                        </td>
                    </tr>

                </table>

            </div>
            <ul class="contenedor-silabas">
                
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Olor</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Color</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">Sabor</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Sólido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Líquido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">Gaseoso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">mares</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">ríos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">tiendas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">beber</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">asearte</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">lavar</h4>
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
function result_tipo_4_1_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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