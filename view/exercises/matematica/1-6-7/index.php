<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $meses = array('Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo') ?>
<div class="container-two">
    <div class="grid-container">
        <?php for ($i=0; $i < count($meses); $i++) { 
            if ($meses[$i] == 'Lunes' || $meses[$i] == 'Martes' || $meses[$i] == 'Miércoles' || $meses[$i] == 'Jueves' || $meses[$i] == 'Viernes') {   
        ?>
        <div class="grid-item" alt="n">
            <div class="mes">
                <span><?=$meses[$i]?></span>
            </div>
        </div>
        <?php } else { ?>
        <div class="grid-item" alt="">
            <div class="mes">
                <span><?=$meses[$i]?></span>
            </div>
        </div>
        <?php } 
        }  ?>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
// Formulario - Registrados

function result_tipo_1_6_7() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>