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
                    <div class="d-flex"><span>•</span> El destinatario influye en mi texto de tres formas: <div class="contenedor" alt="el tipo de lenguaje"></div>, <div class="contenedor" alt="la complejidad del tema"></div> y</div>
                    <div class="d-flex"><div class="contenedor" alt="el tipo de dibujos"></div>.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="el tipo de lenguaje">el tipo de lenguaje</div>
                    <div class="pieza" alt="las comparaciones">las comparaciones</div>
                    <div class="pieza" alt="los adjetivos calificativos">los adjetivos calificativos</div>
                    <div class="pieza" alt="los carteles">los carteles</div>
                    <div class="pieza" alt="la complejidad del tema">la complejidad del tema</div>
                    <div class="pieza" alt="el tipo de dibujos">el tipo de dibujos</div>
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

function result_tipo_5_1_21() {
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