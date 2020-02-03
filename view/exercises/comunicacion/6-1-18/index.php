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
            <div class="cajas alea">
                <div class="pieza item" alt="3">prístino</div>
                <div class="pieza item" alt="2">tierra</div>
                <div class="pieza item" alt="2">nieve</div>
                <div class="pieza item" alt="1">algún</div>
                <div class="pieza item" alt="1">contaminación</div>
                <div class="pieza item" alt="3">científico</div>
                <div class="pieza item" alt="1">salud</div>
                <div class="pieza item" alt="3">atmósfera</div>
                <div class="pieza item" alt="2">reciclaje</div>
                <div class="pieza item" alt="1">natural</div>
            </div>
            <div class="imagebg">
                <div class="box box1 contenedor" alt="1"></div>
                <div class="box box2 contenedor" alt="2"></div>
                <div class="box box3 contenedor" alt="3"></div>
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
function result_tipo_6_1_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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