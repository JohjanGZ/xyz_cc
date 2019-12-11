<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $opciones = array('vacío','unitario','finito','infinito') ?>
<div class="container-two">
    <div class="grid-preguntas">
        <p class="text"><span class="pto">•</span>El conjunto formado por los peces con plumas es:</p>
        <div class="grid-container">
            <?php for ($i=0; $i < count($opciones); $i++) { 
            if ($i == 0 ) {   
        ?>
            <div class="grid-item" alt="n">
                <div class="mes">
                    <span><?=$opciones[$i]?></span>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item" alt="">
                <div class="mes">
                    <span><?=$opciones[$i]?></span>
                </div>
            </div>
            <?php } 
        }  ?>
        </div>
    </div>

    <div class="grid-preguntas">
        <p class="text"><span class="pto">•</span>El conjunto de perros y gatos que hablan:</p>
        <div class="grid-container">
            <?php for ($i=0; $i < count($opciones); $i++) { 
            if ($i == 0 ) {   
        ?>
            <div class="grid-item" alt="n">
                <div class="mes">
                    <span><?=$opciones[$i]?></span>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item" alt="">
                <div class="mes">
                    <span><?=$opciones[$i]?></span>
                </div>
            </div>
            <?php } 
        }  ?>
        </div>
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

function result_tipo_3_0_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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