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
        <div class="vertical">
            <div class="grid-container">
                <div class="grid-item-a" alt="no"><span>Experimento determinístico</span></div>
                <div class="grid-item-a" alt="si"><span>Experimento aleatorio</span></div>
            </div>
            <div class="grid-canva">
                <canvas id="micanvas" width="95" height="307"></canvas>
            </div>
            <div class="grid-container">
                <div class="grid-item-b" alt="no"><span>Si al número 2 lo elevamos al cubo, es seguro que su resultado será 8.</span></div>
                <div class="grid-item-b" alt="si"><span>En una caja hay bolsas de diferentes colores. Al sacar una no se puede precisar de que color será.</span></div>
                <div class="grid-item-b" alt="no"><span>Si te despiertas a las 8 a.m, es seguro que perderás el bus que pasa a esa misma hora.</span></div>
                <div class="grid-item-b" alt="si"><span>Si se lanza un dado pueden salir los números 1; 2; 3; 4; 5 o 6.</span></div>
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
function result_tipo_4_5_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>