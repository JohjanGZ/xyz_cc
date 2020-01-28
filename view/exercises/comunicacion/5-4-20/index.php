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
            <div class="contenedor-imagen">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="contenedor-ejercicios">

                <div class="ejercicio">

                    <div class="contenedor-texto">
                        <p>
                            <span>
                            Metáfora:
                            </span>
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">El celeste</option>
                                    <option value="n">El jardín celeste</option>
                                    <option value="x">El jardín</option>
                                </select>
                            </span>
                        </p>
                    </div>

                </div>
                <div class="ejercicio">

                    <div class="contenedor-texto">
                        <p>
                            <span>
                            Símil:
                            </span>
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Las plateadas nubes</option>
                                    <option value="n">Las plateadas aves</option>
                                    <option value="x">Las aves</option>
                                </select>
                            </span>
                        </p>
                    </div>

                </div>
                <div class="ejercicio">

                    <div class="contenedor-texto">
                        <p>
                            <span>
                            Epíteto:
                            </span>
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Las nubes como algodones</option>
                                    <option value="n">Las nubes como algodones dulces</option>
                                    <option value="x">Los algodones dulces</option>
                                </select>
                            </span>
                        </p>
                    </div>

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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_5_4_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

    console.log(r);
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