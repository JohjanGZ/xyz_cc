<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $signos = array('18','14','7','12','11'); ?>
<div class="container-two">
    <div class="row">
        <div class="grid-container">
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="item">
                    <span>=</span>
                    1
                    <span>+</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="item">
                    <span>=</span>
                    2
                    <span>+</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="item">
                    <span>=</span>
                    4
                    <span>+</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">

                </div>
                <div class="item">
                    <select class="seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
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

function result_tipo_1_1_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>