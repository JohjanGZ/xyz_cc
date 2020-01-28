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
                    <div class="d-flex"><span>•</span> Las agudas se tildan cuando terminan en <div class="contenedor" alt="-n, -s o vocal"></div>. En cambio, las graves</div>
                    <div class="d-flex">se tildan cuando terminan en <div class="contenedor" alt="cualquier consonante"></div>, excepto en <div class="contenedor" alt="-n, -s o vocal"></div>.</div>
                    <div class="d-flex">En el caso de las esdrújulas, en <div class="contenedor" alt="todas llevan tilde"></div>.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="-n, -s o vocal">-n, -s o vocal</div>
                    <div class="pieza" alt="todas llevan tilde">todas llevan tilde</div>
                    <div class="pieza" alt="-n, -s o vocal">-n, -s o vocal</div>
                    <div class="pieza" alt="cualquier consonante">cualquier consonante</div>
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

function result_tipo_5_1_15() {
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