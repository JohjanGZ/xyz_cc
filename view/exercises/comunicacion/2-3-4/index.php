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
                    <span>Rápido</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Veloz</option>
                        <option value="x">Incapaz</option>
                        <option value="n">Lento</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Abrir</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Encender</option>
                        <option value="x">Sospechar</option>
                        <option value="n">Cerrar</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Lleno</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="n">Vacío</option>
                        <option value="x">Completo</option>
                        <option value="x">Algunos</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Lindo</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="n">Feo</option>
                        <option value="x">Bello</option>
                        <option value="x">Bonito</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Muchos</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Bastantes</option>
                        <option value="n">Pocos</option>
                        <option value="x">Uno</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Ganador</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Estudioso</option>
                        <option value="n">Perdedor</option>
                        <option value="x">Perezoso</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Seco</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Frío</option>
                        <option value="x">Soleado</option>
                        <option value="n">Mojado</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Arriba</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Encima</option>
                        <option value="n">Abajo</option>
                        <option value="x">Claro</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Grueso</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Gordo</option>
                        <option value="n">Delgado</option>
                        <option value="x">Feliz</option>
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
function result_tipo_2_3_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

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