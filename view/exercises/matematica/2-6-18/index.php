<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('1','2','3','4','5'); 
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="items aleatorio">
                <div class="item seleccion">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </div>
                <div class="item seleccion">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </div>
                <div class="item seleccion" alt="n">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </div>
                <div class="item seleccion">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <img src="<?= $dir ?>/img/2.png" alt="">
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>