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
            <p>
            •  El <span class="contenedor" alt="1"></span> es la conversación de dos personajes.
            </p>
            <p>• El <span class="contenedor" alt="2"></span> es el discurso que pronuncia un personaje al hablar consigo mismo.</p>
            <p>•  El <span class="contenedor" alt="3"></span> es la frase que expresa un personaje fingiendo que la oye solo el público.</p>
            <p>• El <span class="contenedor" alt="4"></span> se produce cuando hablar fuera de escena.</p>
            </div>
            <div class="cajas">
                <div class="pieza item" alt="3">aparte</div>
                <div class="pieza item" alt="1">diálogo</div>
                <div class="pieza item" alt="2">monólogo</div>
                <div class="pieza item" alt="4"><i>Off</i></div>
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
function result_tipo_5_8_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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