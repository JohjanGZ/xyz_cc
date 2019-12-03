<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numeros = array('Cien', 'Doscientos', 'Trescientos', 'Cuatrocientos','ciento cincuenta y ocho','trescientos treinta y dos','doscientos setenta y cinco', 'Quinientos', 'Seiscientos', 'Setecientos', 'Ochocientos', 'Novecientos') ?>

<body>

    <div class="container-two">
        <div class="grid-options">
            <div class="grid-option">
                158
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="ciento cincuenta y ocho">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                332
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="trescientos treinta y dos">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                275
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="doscientos setenta y cinco">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_5_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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