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

            <div class="contenedor-ejercicio">
                <div class="contenedor-x" alt="caja">
                    <span>Caja</span>
                </div>
                <div class="contenedor-x" alt="juego">
                    <span>Juego</span>
                </div>
                <div class="contenedor-x" alt="camino">
                    <span>Camino</span>
                </div>
            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="juego">
                    jugar
                </span>
                <span class="palabra pieza" alt="camino">
                    caminante
                </span>
                <span class="palabra pieza" alt="caja">
                    cajón
                </span>
                <span class="palabra pieza" alt="camino">
                    caminar
                </span>
                <span class="palabra pieza" alt="juego">
                    juguete
                </span>
                <span class="palabra pieza" alt="caja">
                    cajero
                </span>
                <span class="palabra pieza" alt="juego">
                    juguetería
                </span>
                <span class="palabra pieza" alt="camino">
                    caminata
                </span>
                <span class="palabra pieza" alt="caja">
                    cajita
                </span>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_4_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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