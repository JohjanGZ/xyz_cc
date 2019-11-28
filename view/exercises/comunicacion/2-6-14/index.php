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
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">guirasol</option>
                        <option value="n">girasol</option>
                        <option value="x">jirasol</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">girafa</option>
                        <option value="x">guirafa</option>
                        <option value="n">jirafa</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">guersey</option>
                        <option value="x">gersey</option>
                        <option value="n">jersey</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="n">tijera</option>
                        <option value="x">tigera</option>
                        <option value="x">tiguera</option>
                    </select>
                </div>
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
function result_tipo_2_6_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

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