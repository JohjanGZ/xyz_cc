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
                <div class="ejercicio">
                    <div class="contenedor-respuesta" alt="uno">

                    </div>
                    <div class="contenedor-oracion">
                        <span>
                            Primero Ramón tenia el cabello largo.
                        </span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta" alt="dos">

                    </div>
                    <div class="contenedor-oracion">
                        <span>
                            Luego su madre le corto el cabello.
                        </span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta" alt="tres">

                    </div>
                    <div class="contenedor-oracion">
                        <span>
                            Finalmente Ramón tiene nuevo corte.
                        </span>
                    </div>
                </div>
            </div>
            <div class="contenedor-imagenes">
                <span class="imagen pieza" alt="uno">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </span>
                <span class="imagen pieza" alt="dos">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </span>
                <span class="imagen pieza" alt="tres">
                    <img src="<?= $dir ?>/img/3.png" alt="">
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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