<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="content">
            <div class="info">
            <p>• Martina presentó una danza originaria de Cusco.<span class="contenedor" alt="1"></span></p>
            <p>• Ayer le entregaron a mi papá su auto reparado.<span class="contenedor" alt="2"></span></p>
            <p>• Leer es el mejor remedio para el aburrimiento. <span class="contenedor" alt="3"></span></p>
            <p>• Gabriela ha comprado un libro de color rojo.<span class="contenedor" alt="4"></span></p>
            <p>•César llegó corriendo al cine a ver el estreno.<span class="contenedor" alt="5"></span></p>
            <div class="cajas ale">
                <div class="pieza item" alt="1">Verbo simple</div>
                <div class="pieza item" alt="2">Participio</div>
                <div class="pieza item" alt="3">Infinito</div>
                <div class="pieza item" alt="4">Verbo compuesto</div>
                <div class="pieza item" alt="5">Gerundio</div>
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
function result_tipo_5_5_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>