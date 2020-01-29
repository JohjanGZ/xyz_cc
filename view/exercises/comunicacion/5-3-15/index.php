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
        <div class="contenedor-oraciones">
            <div class="oracion">
                <div class="pregunta">
                    <div class="d-flex"><span>•</span> Los domingos son los “días de museo”, es decir, son gratuitos <div class="contenedor" alt="Deexplicacion"></div>.</div>
                    <div class="d-flex"><span>•</span> Me gustó el paseo, aunque al principio no quería ir. <div class="contenedor" alt="Deconcesion"></div>.</div>
                    <div class="d-flex"><span>•</span> Entraron al mar, pero los jóvenes no sabían nadar. <div class="contenedor" alt="Decontraste"></div>.</div>
                    <div class="d-flex"><span>•</span> Obtuve el título y el premio, porque me esforcé mucho. <div class="contenedor" alt="Decausa"></div>.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="Decontraste">De contraste</div>
                    <div class="pieza" alt="Decausa">De causa</div>
                    <div class="pieza" alt="Deexplicacion">De explicación</div>
                    <div class="pieza" alt="Deconcesion">De concesión</div>
                </div>
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

function result_tipo_5_3_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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