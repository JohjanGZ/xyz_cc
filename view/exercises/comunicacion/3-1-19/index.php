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
                        <th>Personas</th>
                        <th>Cosas</th>
                        <th>Lugares</th>
                    </tr>
                    <tr>
                        <td>
                            <span class="respuesta" alt="personas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="cosas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="lugares"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="respuesta" alt="personas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="cosas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="lugares"></span>
                        </td>   
                    </tr>
                    <tr>
                        <td>
                            <span class="respuesta" alt="personas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="cosas"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="lugares"></span>
                        </td>   
                    </tr>
                   
                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="personas">
                    Luis
                </span>
                <span class="palabra pieza" alt="personas">
                    Ana
                </span>
                <span class="palabra pieza" alt="personas">
                    Carmen
                </span>
                <span class="palabra pieza" alt="cosas">
                    Lápiz
                </span>
                <span class="palabra pieza" alt="cosas">
                    Vaso
                </span>
                <span class="palabra pieza" alt="cosas">
                    Disco
                </span>
                <span class="palabra pieza" alt="lugares">
                    Argentina
                </span>
                <span class="palabra pieza" alt="lugares">
                    Tacna
                </span>
                <span class="palabra pieza" alt="lugares">
                    París
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
function result_tipo_3_1_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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