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
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="img">
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja b1" alt="1"></div>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja b2" alt="5"></div>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <div class="caja b3" alt="3"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="1" class="pieza">
                    <span>Gepetto</span>
                </li>
                <li id="2" alt="2" class="pieza">
                    <span>Lucas Grillo</span>
                </li>
                <li id="3" alt="3" class="pieza">
                    <span>Pinocho</span>
                </li>
                <li id="4" alt="4" class="pieza">
                    <span>Guepetto</span>
                </li>
                <li id="5" alt="5" class="pieza">
                    <span>Pepito Grillo</span>
                </li>
                <li id="6" alt="6" class="pieza">
                    <span>Marcelo</span>
                </li>
            </ul>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_9_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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