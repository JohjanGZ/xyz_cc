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
                    <div class="contenedor-texto">
                        <p>
                            Pide ayuda a una persona adulta para
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">cortar</option>
                                    <option value="x">agrega</option>
                                    <option value="x">aliña</option>
                                    <option value="x">mezcla</option>
                                </select>
                            </span>
                            la cebolla, las papas y las zanahorias en cuadraditos.
                        </p>
                    </div>

                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            En un recipiente, 
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">cortar</option>
                                    <option value="x">agrega</option>
                                    <option value="x">aliña</option>
                                    <option value="n">mezcla</option>
                                </select>
                            </span>
                            la cebolla, las papas y las zanahorias.
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">cortar</option>
                                    <option value="n">agrega</option>
                                    <option value="x">aliña</option>
                                    <option value="x">mezcla</option>
                                </select>
                            </span>
                            a la mezcla el perejil finalmente picado.
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-img">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>
                    <div class="contenedor-texto">
                        <p>
                            
                            <span>
                                <select class="browser-default" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">cortar</option>
                                    <option value="x">agrega</option>
                                    <option value="n">aliña</option>
                                    <option value="x">mezcla</option>
                                </select>
                            </span>
                            la ensalada con mayonesa y sal al gusto.
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_20() {
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