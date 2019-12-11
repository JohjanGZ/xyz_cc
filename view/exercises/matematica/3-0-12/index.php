<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container-two">
        <div class="grid-options">
            <div class="grid-option pieza" alt="1">
                M = {capital de Argentina}
            </div>
            <div class="grid-option pieza" alt="2">
                N = {perro volador}
            </div>
            <div class="grid-option pieza" alt="1">
                O = {alcalde de Lima}
            </div>
            <div class="grid-option pieza" alt="1">
                P = {número par mayor que 301 y menor que 303} 
            </div>
            <div class="grid-option pieza" alt="2">
                Q = {personas que viven en la Luna} 
            </div>
            <div class="grid-option pieza" alt="3">
                R = {estaciones del año} 
            </div>
            <div class="grid-option pieza" alt="2">
                S = {rey actual del Perú} 
            </div>
            <div class="grid-option pieza" alt="3">
                T = {huesos del cuerpo humano} 
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item contenedorPieza caja" alt="1">conjunto unitario</div>
            <div class="grid-item contenedorPieza caja" alt="2">conjunto vacio</div>
            <div class="grid-item contenedorPieza caja" alt="3">conjunto finito</div>
            <div class="grid-item contenedorPieza caja" alt="4">conjunto infinito</div>
        </div>
    </div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_3_0_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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