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
            <div class="image">
                <div class="box contenedor box1" alt="1"></div>
                <div class="box contenedor box2" alt="2"></div>
                <div class="box contenedor box3" alt="3"></div>
                <div class="box contenedor box4" alt="4"></div>
                <div class="box contenedor box5" alt="5"></div>
                <div class="box contenedor box6" alt="6"></div>
            </div>
            <div class="options">
                <div class="item pieza" alt="1">Código</div>
                <div class="item pieza" alt="3">Mensaje</div>
                <div class="item pieza" alt="2">Emisor</div>
                <div class="item pieza" alt="4">Receptor</div>
                <div class="item pieza" alt="5">Canal</div>
                <div class="item pieza" alt="6">Contexto</div>
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

function result_tipo_6_0_13() {
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