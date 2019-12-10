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
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p class="text-alone">
                                La pequeña niña <b>canta</b> una bella canción.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                La pequeña niña
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">cantó</option>
                                        <option value="x">cantará</option>
                                        <option value="x">canta</option>
                                    </select>
                                </span>
                                una bella canción.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                La pequeña niña
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">canta</option>
                                        <option value="n">cantará</option>
                                        <option value="x">cantó</option>
                                    </select>
                                </span>
                                una bella canción.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/4.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p class="text-alone">
                                Javier <b>lee</b> un interesante libro.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/5.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Javier
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">lee</option>
                                        <option value="x">leerá</option>
                                        <option value="n">leyó</option>
                                    </select>
                                </span>
                                un interesante libro.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/6.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Javier
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">leerá</option>
                                        <option value="x">lee</option>
                                        <option value="x">leyó</option>
                                    </select>
                                </span>
                                un interesante libro.
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
function result_tipo_3_5_14() {
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