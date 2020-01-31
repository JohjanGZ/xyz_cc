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
        <div class="container">
            <div class="items">
                <div class="pieza" alt="7">danza</div>
                <div class="pieza" alt="6">una</div>
                <div class="pieza" alt="2">estudiantes</div>
                <div class="pieza" alt="3">de</div>
                <div class="pieza" alt="8">típica</div>
                <div class="pieza" alt="1">los</div>
                <div class="pieza" alt="5">presentaron</div>
                <div class="pieza" alt="4">5.º B</div>
            </div>
            <div class="draggers">
                <div class="contenedor" alt="1"></div>
                <div class="contenedor" alt="2"></div>
                <div class="contenedor" alt="3"></div>
                <div class="contenedor" alt="4"></div>
                <div class="contenedor" alt="5"></div>
                <div class="contenedor" alt="6"></div>
                <div class="contenedor" alt="7"></div>
                <div class="contenedor" alt="8"></div>
            </div>
            <div class="items">
                <div class="pieza" alt="3">perritos</div>
                <div class="pieza" alt="8">veterinario</div>
                <div class="pieza" alt="2">lindos</div>
                <div class="pieza" alt="5">vacunados</div>
                <div class="pieza" alt="4">serán</div>
                <div class="pieza" alt="7">el</div>
                <div class="pieza" alt="6">por</div>
                <div class="pieza" alt="1">aquello</div>
            </div>
            <div class="draggers">
                <div class="contenedor" alt="1"></div>
                <div class="contenedor" alt="2"></div>
                <div class="contenedor" alt="3"></div>
                <div class="contenedor" alt="4"></div>
                <div class="contenedor" alt="5"></div>
                <div class="contenedor" alt="6"></div>
                <div class="contenedor" alt="7"></div>
                <div class="contenedor" alt="8"></div>
            </div>
            <div class="items">
                <div class="pieza" alt="4">emergencia</div>
                <div class="pieza" alt="8">vida</div>
                <div class="pieza" alt="1">la</div>
                <div class="pieza" alt="5">podría</div>
                <div class="pieza" alt="2">mochila</div>
                <div class="pieza" alt="3">de</div>
                <div class="pieza" alt="6">salvar</div>
                <div class="pieza" alt="7">mi</div>
            </div>
            <div class="draggers">
                <div class="contenedor" alt="1"></div>
                <div class="contenedor" alt="2"></div>
                <div class="contenedor" alt="3"></div>
                <div class="contenedor" alt="4"></div>
                <div class="contenedor" alt="5"></div>
                <div class="contenedor" alt="6"></div>
                <div class="contenedor" alt="7"></div>
                <div class="contenedor" alt="8"></div>
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
function result_tipo_5_8_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 24) {
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