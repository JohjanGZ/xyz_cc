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
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        2
                    </div>
                    <div class="grid-item" style="position:relative;">
                        6
                        <span class="mas">+</span>
                    </div>
                    <div class="grid-item bre">
                        
                    </div>
                    <div class="grid-item bre">
                        8
                    </div>
                    <div class="grid-item">
                        <select class="slc"  alt="3">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc"  alt="4">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>

                <div class="grid-container">
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        3
                    </div>
                    <div class="grid-item" style="position:relative;">
                        7
                        <span class="mas">+</span>
                    </div>
                    <div class="grid-item bre">
                        
                    </div>
                    <div class="grid-item bre">
                        9
                    </div>
                    <div class="grid-item">
                        <select class="slc" alt="4">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" alt="6">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                </div>

                <div class="grid-container">
                    <div class="grid-item cabe"><span class="r">D</span></div>
                    <div class="grid-item cabe"><span class="b">U</span></div>
                    <div class="grid-item">
                        1
                    </div>
                    <div class="grid-item" style="position:relative;">
                        4
                        <span class="mas">+</span>
                    </div>
                    <div class="grid-item bre">
                        
                    </div>
                    <div class="grid-item bre">
                        8
                    </div>
                    <div class="grid-item">
                        <select class="slc" alt="2">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="slc" alt="2">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_3_39() {
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