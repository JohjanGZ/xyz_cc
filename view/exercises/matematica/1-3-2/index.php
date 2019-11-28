<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
$numeros = array(
    "seis",
    "siete",
    "ocho",
    "nueve",
    "diez",
    "once",
    "doce",
    "trece",
    "catorce",
    "quince"
); 
?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/6.png" class="img">
                    <select class="slc" alt="seis">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/7.png" class="img">
                    <select class="slc" alt="siete">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/8.png" class="img">
                    <select class="slc" alt="ocho">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/9.png" class="img">
                    <select class="slc" alt="nueve">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/10.png" class="img">
                    <select class="slc" alt="diez">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/11.png" class="img">
                    <select class="slc"  alt="once">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/12.png" class="img">
                    <select class="slc" alt="doce">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/13.png" class="img">
                    <select class="slc"  alt="trece">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/14.png" class="img">
                    <select class="slc"  alt="catorce">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/15.png" class="img">
                    <select class="slc" alt="quince">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < 10; $i++) { ?><option  value="<?= $numeros[$i] ?>"><?= $numeros[$i] ?></option><?php } ?>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_3_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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