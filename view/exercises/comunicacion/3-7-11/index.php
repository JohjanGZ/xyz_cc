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
                        <span class="celeste">●</span> Vimos una película sobre la <span class="palabra" alt="decadencia">x</span> del imperio romano.
                        </p>
                        <p>
                        <span class="celeste">●</span> Todo el día sentí el <span class="palabra" alt="cansancio">x</span> producido por mi esfuerzo físico.
                        </p>
                        <p>
                        <span class="celeste">●</span> La <span class="palabra" alt="distancia">x</span> entre Lima e Ica es aproximadamente 300 km.
                        </p>
                        <p>
                        <span class="celeste">●</span> Julia recibió un premio por su <span class="palabra" alt="excelencia">x</span> académica.
                        </p>
                        <p>
                        <span class="celeste">●</span> Mi papá siempre usa una <span class="palabra" alt="fragancia">x</span> deliciosa.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="decadencia">decadencia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cansancio">cansancio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="distancia">distancia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="excelencia">excelencia</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fragancia">fragancia</h4>
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
function result_tipo_3_7_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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