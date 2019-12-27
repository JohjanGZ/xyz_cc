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
                            Nosotros
                            <span class="palabra contenedor" alt="estuvimos">x</span>
                            en el parque de atracciones.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Juan y María
                            <span class="palabra contenedor" alt="iran">x</span>
                            a visitar a sus abuelos.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Yo
                            <span class="palabra contenedor" alt="tomo">x</span>
                            el autobús.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Ella y yo
                            <span class="palabra contenedor" alt="aprendimos">x</span>
                            a montar bicicleta.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Yo 
                            <span class="palabra contenedor" alt="desayuno">x</span>
                            zumo de naranja.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Andrea y su amiga
                            <span class="palabra contenedor" alt="montaran">x</span>
                            en bici.
                        </p>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="estuvimos">estuvimos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="iran">irán</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tomo">tomo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aprendimos">aprendimos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="desayuno">desayuno</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="montaran">montarán</h4>
                </li>
            </ul>
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
function result_tipo_4_5_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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