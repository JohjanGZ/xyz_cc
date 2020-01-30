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
                <span class="spn">•</span>I. Indica la ronda de debate o preguntas.
            </div>
            <div>
                <span class="spn">•</span>II. Explica el orden de participación.
            </div>
            <div>
                <span class="spn">•</span>III. Menciona el tiempo de exposición.
            </div>
            <div>
                <span class="spn">•</span>IV. Presenta al grupo y el tema de exposición.
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

function result_tipo_5_3_9() {
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