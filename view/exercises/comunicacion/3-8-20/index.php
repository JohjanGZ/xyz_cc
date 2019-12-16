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
                        <td></td>
                        <td></td>
                        <td class="table-item">
                            <div class="table-respuesta" alt="estado" numero="uno"></div>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <div class="table-respuesta uno" alt="x"></div>
                        </td>
                    </tr>
                    <tr>

                        <td></td>
                        <td></td>
                        <td>
                           

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td class="table-item">
                            <span>Estados de la materia</span>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item">
                            <div class="table-respuesta solido" alt="solido" ></div>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td>
                        </td>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                        <td>
                        </td>
                        <td></td>
                        <td></td>

                    </tr>
                    <tr>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta" alt="estado" numero="dos"></div>
                        </td>
                        <td>
                            <div class="table-linea"></div>
                        </td>
                        <td class="table-item ti-last">
                            <div class="table-respuesta table-last dos" alt="x"></div>
                        </td>

                    </tr>

                </table>

            </div>
            <ul class="contenedor-silabas">
               
                <li class="silabas">
                    <h4 class="pieza" alt="estado" estado="fusion">Fusión</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="estado" estado="sublimacion">Sublimación</h4>
                </li>
                
                <li class="silabas">
                    <h4 class="pieza" alt="solido" >Sólido</h4>
                </li>
               
                <li class="silabas">
                    <h4 class="pieza" alt="fusion">líquido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sublimacion">gaseoso</h4>
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
function result_tipo_3_8_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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