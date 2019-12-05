<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numero = array('50', '46', '78','92', '81', '93','35', '61') ?>

<body>

    <div class="container-two">
        <div class="respuesta">
            <div class="grid-options">
                <?php for ($i=0; $i < count($numero); $i++) { 
                    if ($numero[$i]%2==0) {   
                ?>
                <div class="grid-option pieza" alt="par">
                    <?= $numero[$i] ?>
                </div>
                <?php } else { ?>
                <div class="grid-option pieza" alt="impar">
                    <?= $numero[$i] ?>
                </div>
                <?php } 
                }  ?>
            </div>
            <div class="grid-container">
                <div class="grid-item caja" alt="par">
                    <span class="title">Pares</span>
                </div>
                <div class="grid-item caja" alt="impar">
                    <span class="title">Impares</span>
                </div>
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
function result_tipo_1_7_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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