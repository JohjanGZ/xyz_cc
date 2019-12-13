<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $num = array('3 890','5 247','4 251','2 312','2 132');
      $num2= array('6 742','5 479','7 050','3 652','9 365');
      $num3= array('1 240','1 420','2 401','1 024','4 102');
      $num4= array('2 765','5 215','4 654','3 546','4 788'); ?>
<div class="container-two">
    <div class="grid-preguntas">
        <div class="grid-container c1">
            <?php for ($i=0; $i < count($num); $i++) { 
                if ($i == 4) {   
            ?>
            <div class="grid-item b1" alt="n">
                <div class="mes">
                    <?=$num[$i]?>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item b1" alt="">
                <div class="mes">
                    <?=$num[$i]?>
                </div>
            </div>
            <?php } 
            }  ?>
        </div>

        <div class="grid-container c2">
            <?php for ($i=0; $i < count($num2); $i++) { 
                if ($i == 3) {   
            ?>
            <div class="grid-item b2" alt="n">
                <div class="mes">
                    <?=$num2[$i]?>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item b2" alt="">
                <div class="mes">
                    <?=$num2[$i]?>
                </div>
            </div>
            <?php } 
            }  ?>
        </div>

        <div class="grid-container c3">
            <?php for ($i=0; $i < count($num3); $i++) { 
                if ($i == 3) {   
            ?>
            <div class="grid-item b3" alt="n">
                <div class="mes">
                    <?=$num3[$i]?>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item b3" alt="">
                <div class="mes">
                    <?=$num3[$i]?>
                </div>
            </div>
            <?php } 
            }  ?>
        </div>

        <div class="grid-container c4">
            <?php for ($i=0; $i < count($num4); $i++) { 
                if ($i == 0) {   
            ?>
            <div class="grid-item b4" alt="n">
                <div class="mes">
                    <?=$num4[$i]?>
                </div>
            </div>
            <?php } else { ?>
            <div class="grid-item b4" alt="">
                <div class="mes">
                    <?=$num4[$i]?>
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

function result_tipo_3_1_11() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>