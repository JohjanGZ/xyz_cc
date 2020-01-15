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
        <div class="grid-options">
            <div class="pieza" alt="pen">527<span>+</span>0<span>=</span>527</div>
            <div class="pieza" alt="pa"><span>(</span>23<span>+</span>75<span>) +</span>538<span>=</span>527<span>+
                    (</span>231<span>+</span>538<span>)</span></div>
            <div class="pieza" alt="pc">627<span>+</span>418<span>=</span>418<span>+</span>627</div>
            <div class="pieza" alt="pc">950<span>+</span>435<span>=</span>435<span>+</span>950</div>
            <div class="pieza" alt="pa"><span>(</span>527<span>+</span>231<span>) +</span>538<span>=</span>527<span>+
                    (</span>231<span>+</span>538<span>)</span></div>
        </div>
        <div class="grid-contenedor">
            <div class="contenedor" alt="pa">
                <span>Propiedad asociativa</span>
            </div>
            <div class="contenedor" alt="pc">
                <span>Propiedad conmutativa</span>
            </div>
            <div class="contenedor" alt="pen">
                <span>Propiedad del elemento neutro</span>
            </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_1_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    if (r == 5) {
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