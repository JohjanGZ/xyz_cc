<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $opciones = array('sumar 2','restar 5','restar 2','sumar 4','sumar 3','restar 5') ?>
<div class="container-two">
    <div class="grid-random">
        <div class="grid-preguntas">
            <center>
                <img src="<?=$dir?>/img/1.png" class="img">
            </center>
            <div class="grid-container">
                <?php for ($i=0; $i < 3; $i++) { 
                if ($i == 2 ) {   
            ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?= $opciones[$i] ?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?= $opciones[$i] ?></span>
                    </div>
                </div>
                <?php } 
            }  ?>
            </div>
        </div>
        <div class="grid-preguntas">
            <center>
                <img src="<?=$dir?>/img/2.png" class="img">
            </center>
            <div class="grid-container">
                <?php for ($i=3; $i < 6; $i++) { 
                if ($i == 3 ) {   
            ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?= $opciones[$i] ?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?= $opciones[$i] ?></span>
                    </div>
                </div>
                <?php } 
            }  ?>
            </div>
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

function result_tipo_3_6_3() {
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