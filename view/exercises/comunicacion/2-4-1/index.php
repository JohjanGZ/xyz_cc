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
                    <span>¿Dónde se encontraban las lagartijas?</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="n">En lo alto de un muro</option>
                        <option value="x">En un zoológico de la ciudad</option>
                        <option value="x">Debajo de una piedra</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>Mientras una lagartija dormía, ¿Qué hacía su compañera?</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Se escondía en la arena</option>
                        <option value="n">Intentaba atrapar unos mosquitos</option>
                        <option value="x">Trataba de dormir también</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>¿Por qué la lagartija deseaba ser como el ciervo?</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="x">Porque no le gustaba tomar el sol.</option>
                        <option value="x">Porque quería ser veloz como el ciervo.</option>
                        <option value="n">Porque quería destacar sobre los demás.</option>
                    </select>
                </div>
                <div class="ejercicio">
                    <span>¿Qué sentía una de las lagartijas por el ciervo?</span>
                    <select class="browser-default" alt="n">
                        <option value="" disabled selected>Escoge una opción</option>
                        <option value="n">Envidia</option>
                        <option value="x">Miedo</option>
                        <option value="x">Confianza</option>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_4_1() {
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