<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 
$opciones  = array('4 657','6 324','2 546');
$opciones1 = array('5 672','9 780','8 780');
$opciones2 = array('5 735','6 186','1 658');
$opciones3 = array('2 562','1 020','3 649');
$opciones4 = array('7 568','8 878','8 970');
$opciones5 = array('7 435','7 538','6 436');
?>
<div class="container-two">
    <div class="grid-preguntas">
        <!-- 1 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>3 500</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones); $i++) { 
                    if ($i == 2 ) {   
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
        <!-- 2 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>8 437</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones1); $i++) { 
                    if ($i == 0 ) {   
                ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?=$opciones1[$i]?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?=$opciones1[$i]?></span>
                    </div>
                </div>
                <?php } 
                }  ?>
            </div>
        </div>
        <!-- 3 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>4 396</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones2); $i++) { 
                    if ($i == 2 ) {   
                ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?=$opciones2[$i]?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?=$opciones2[$i]?></span>
                    </div>
                </div>
                <?php } 
                }  ?>
            </div>
        </div>
        <!-- 4 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>1 635</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones3); $i++) { 
                    if ($i == 1 ) {   
                ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?=$opciones3[$i]?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?=$opciones3[$i]?></span>
                    </div>
                </div>
                <?php } 
                }  ?>
            </div>
        </div>
        <!-- 5 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>8 432</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones4); $i++) { 
                    if ($i == 0 ) {   
                ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?=$opciones4[$i]?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?=$opciones4[$i]?></span>
                    </div>
                </div>
                <?php } 
                }  ?>
            </div>
        </div>
        <!-- 6 -->
        <div class="grid-container">
            <span class="text"><span class="s">•</span>7 345</span>
            <div class="grid-option">
                <?php for ($i=0; $i < count($opciones5); $i++) { 
                    if ($i == 2 ) {   
                ?>
                <div class="grid-item" alt="n">
                    <div class="mes">
                        <span><?=$opciones5[$i]?></span>
                    </div>
                </div>
                <?php } else { ?>
                <div class="grid-item" alt="">
                    <div class="mes">
                        <span><?=$opciones5[$i]?></span>
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

function result_tipo_3_2_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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