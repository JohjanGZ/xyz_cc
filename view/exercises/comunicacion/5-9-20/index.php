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
        <div class="oracion">
            <div>
                <span class="spn">•</span>I. Puede tener dos tamaños: carta y A4.
            </div>
            <div>
                <span class="spn">•</span>II. Se emplea la fuente Times New Roman o Arial.
            </div>
            <div>
                <span class="spn">•</span>III. El tamaño de la fuente debe ser de 11 puntos.
            </div>
            <div>
                <span class="spn">•</span>IV. El interlineado debe ser 1.5.
            </div>
            <div class="contenedor-check">
                <img src="<?=$dir?>/img/1.png" class="img seleccion" alt="n">
                <img src="<?=$dir?>/img/2.png" class="img seleccion" alt="">
                <img src="<?=$dir?>/img/3.png" class="img seleccion" alt="">
                <img src="<?=$dir?>/img/4.png" class="img seleccion" alt="">
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

function result_tipo_5_9_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
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