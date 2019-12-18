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

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Producto:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Pro</option>
                                        <option value="n">duc</option>
                                        <option value="x">to</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Campo:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Cam</option>
                                        <option value="x">po</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>


                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Fútbol:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Fút</option>
                                        <option value="x">bol</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Profunda
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Pro</option>
                                        <option value="n">fun</option>
                                        <option value="x">da</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Carbón:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Car</option>
                                        <option value="n">bón</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Árboles:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Ár</option>
                                        <option value="x">bo</option>
                                        <option value="x">les</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Excursión:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Ex</option>
                                        <option value="x">cur</option>
                                        <option value="n">sión</option>
                                    </select>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Revolucionar:
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Re</option>
                                        <option value="x">vo</option>
                                        <option value="x">lu</option>
                                        <option value="x">cio</option>
                                        <option value="n">nar</option>
                                    </select>
                                </span>
                            </p>
                        </div>
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
function result_tipo_4_0_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r= 0;
    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
    if (r == 8) {
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