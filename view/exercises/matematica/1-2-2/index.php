<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="campo-img">
                    <img src="<?=$dir?>/img/1-1.png" class="img">
                    <img src="<?=$dir?>/img/1-2.png" class="img">
                    <img src="<?=$dir?>/img/1-3.png" class="img">
                </div>
                <div class="campo">
                    <select id="slc1">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">+</span>
                    <select id="slc2">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">=</span>
                    <select id="slc3">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo-img">
                    <img src="<?=$dir?>/img/2-1.png" class="img">
                    <img src="<?=$dir?>/img/2-2.png" class="img">
                    <img src="<?=$dir?>/img/2-3.png" class="img">
                </div>
                <div class="campo">
                    <select id="slc4">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">+</span>
                    <select id="slc5">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">=</span>
                    <select id="slc6">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo-img">
                    <img src="<?=$dir?>/img/3-1.png" class="img">
                    <img src="<?=$dir?>/img/3-2.png" class="img">
                    <img src="<?=$dir?>/img/3-3.png" class="img">
                </div>
                <div class="campo">
                    <select id="slc7">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">+</span>
                    <select id="slc8">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">=</span>
                    <select id="slc9">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 11; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 18) {
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