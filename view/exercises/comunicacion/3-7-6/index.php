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

                    <div class="contenedor-respuesta">
                        <p>
                            <span class="celeste">●</span>
                            Futbolista es a pelota como fotógrafo es a..
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">foto</option>
                                    <option value="n">cámara</option>
                                    <option value="x">paisaje</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #efb511;">●</span>
                            Avión es a aire como barco es a..
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">agua</option>
                                    <option value="x">volar</option>
                                    <option value="x">riel</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>

                            <span style="color: #11ef89;">●</span>
                            Libro es a leer como canción es a..
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">radio</option>
                                    <option value="x">cantante</option>
                                    <option value="n">escuchar</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #ef11a0;">●</span>
                            Anillo es a dedo como cabeza es a..
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">pantalón</option>
                                    <option value="x">cabello</option>
                                    <option value="n">sombrero</option>
                                </select>
                            </span>
                            .
                        </p>
                        <p>
                            <span style="color: #ef11a0;">●</span>
                            Botella es a vino como piscina es a..
                            <span class="select">
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">playa</option>
                                    <option value="x">niños</option>
                                    <option value="n">agua</option>
                                </select>
                            </span>
                            .
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
function result_tipo_3_7_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
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