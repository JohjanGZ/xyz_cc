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
                        <td class="azul">
                            <span class="" alt="presente">Animal</span>
                        </td>
                        <td>
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </td>
                        <td>
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </td>
                    </tr>
                    <tr>
                        <td class="azul">
                            <span class="" alt="presente">Se parecen</span>
                        </td>
                        <td colspan="2">
                            <span class="respuesta" alt="x"></span>
                        </td>

                    </tr>
                    <tr>
                        <td class="azul">
                            <span class="" alt="presente">Se diferencian</span>
                        </td>
                        <td>
                            <span class="respuesta" alt="iguana"></span>
                        </td>
                        <td>
                            <span class="respuesta" alt="dinosaurio"></span>
                        </td>
                    </tr>


                </table>

            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="x">
                    cola
                </span>
                <span class="palabra pieza" alt="x">
                    color
                </span>
                <span class="palabra pieza" alt="iguana">
                    pequeña
                </span>
                <span class="palabra pieza" alt="iguana">
                    papada
                </span>
                <span class="palabra pieza" alt="dinosaurio">
                    grande
                </span>
                <span class="palabra pieza" alt="dinosaurio">
                    fuertes garras
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
function result_tipo_3_3_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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