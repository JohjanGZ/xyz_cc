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
                        <th>Palabra 1</th>
                        <th>Palabra 2</th>
                        <th>Palabra compuesta</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Manchas</span>
                        </td>
                        <td>
                            <span class="" alt="presente">Quita</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="quitamanchas"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Tocar</span>
                        </td>
                        <td>
                            <span class="" alt="presente">Discos</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="tocadiscos"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Rayos</span>
                        </td>
                        <td>
                            <span class="" alt="presente">Para</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="pararrayos"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="" alt="presente">Girar</span>
                        </td>
                        <td>
                            <span class="" alt="presente">Sol</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="girasol"></span>
                        </td>   
                    </tr>
                   
                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="quitamanchas">
                    quitamanchas
                </span>
                <span class="palabra pieza" alt="tocadiscos">
                    tocadiscos
                </span>
                <span class="palabra pieza" alt="pararrayos">
                    pararrayos
                </span>
                <span class="palabra pieza" alt="girasol">
                    girasol
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
function result_tipo_3_3_6() {
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