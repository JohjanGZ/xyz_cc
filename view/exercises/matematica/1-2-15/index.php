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
        <div class="caja">
            <div class="tabla">
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/1.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc1">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc2">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/2.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc3">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc4">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/3.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc5">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc6">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/4.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc7">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc8">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/5.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc9">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc10">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item cabe"><span class="b"></span></div>
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/6.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select id="slc11">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item" style="position:relative;">
                        <select id="slc12">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
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
function result_tipo_1_2_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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