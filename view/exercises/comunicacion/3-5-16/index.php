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
                            <p>
                                María
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">sale</option>
                                        <option value="x">salió</option>
                                        <option value="x">saldrá</option>
                                    </select>
                                </span>
                                de paseo todas las mañanas.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Roberto y Juan
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">visitan</option>
                                        <option value="n">visitarán</option>
                                        <option value="x">visitaron</option>
                                    </select>
                                </span>
                                mañana a fernando.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Eduardo y yo nos
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">conocemos</option>
                                        <option value="x">conoceremos</option>
                                        <option value="n">conocimos</option>
                                    </select>
                                </span>
                                el verano pasado.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/4.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Ayer, yo
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">bañaré</option>
                                        <option value="n">bañé</option>
                                        <option value="x">baño</option>
                                    </select>
                                </span>
                                a mi querido perro.
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
function result_tipo_3_5_16() {
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