<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numeros = array('Quinientos treinta y nueve', 'Novecientos cuatro', 'Ochocientos nueve', 'Setecientos treinta','Novecientos nueve','Trescientos noventa y uno',
                        'Ciento cinco', 'Seiscientos seis', 'Doscientos setenta y seis', 'Cuatrocientos veintitrés') ?>
<body>

    <div class="container-two">
        <div class="grid-options">
            <!-- 1 -->
            <div class="grid-option">
                539
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[0] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 2 -->
            <div class="grid-option">
                904
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[1] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 3 -->
            <div class="grid-option">
                809
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[2] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 4 -->
            <div class="grid-option">
                730
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[3] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 5 -->
            <div class="grid-option">
                909
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[4] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 6 -->
            <div class="grid-option">
                391
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[5] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 7 -->
            <div class="grid-option">
                105
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[6] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 8 -->
            <div class="grid-option">
                606
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[7] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 9 -->
            <div class="grid-option">
                276
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[8] ?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 10 -->
            <div class="grid-option">
                423
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <select class="slc" alt="<?= $numeros[9] ?>">
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
function result_tipo_1_6_16() {
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