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
            <div class="grid-option pieza" alt="2">
                Peces que vuelan.
            </div>
            <div class="grid-option pieza" alt="1">
                Lago más alto del mundo.
            </div>
            <div class="grid-option pieza" alt="1">
                Mes del año que empieza con la letra e.
            </div>
            <div class="grid-option pieza" alt="2">
                Reptil que vuela. 
            </div>
            <div class="grid-option pieza" alt="1">
                Número impar mayor que 350 y menor que 352. 
            </div>
            <div class="grid-option pieza" alt="2">
                Número par mayor que 120 y menor que 122.
            </div>
            <div class="grid-option pieza" alt="2">
                Ser humano de más de 300 años.
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item contenedorPieza caja" alt="1">conjunto unitario</div>
            <div class="grid-item contenedorPieza caja" alt="2">conjunto vacio</div>
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
function result_tipo_3_0_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 7) {
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