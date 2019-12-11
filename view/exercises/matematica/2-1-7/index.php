<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('4C + 0D + 4U','400+0+4','1C + 6D + 7U','ciento sesenta y siete','3C + 4D + 2U','100+60+7','trescientos cuarenta y dos','300+40+2','cuatrocientos cuatro'); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt br bl"><span></span>Se descompone: </div>
            <div class="grid-item tt bn bl"><span></span></div>
            <div class="grid-item tt"><span></span>Se lee:</div>
            <div class="grid-item">
                258
            </div>
            <div class="grid-item">
                2C + 5D + 8U
            </div>
            <div class="grid-item">
                200 + 50 + 8
            </div>
            <div class="grid-item">
                Doscientos cincuenta y ocho
            </div>
            <div class="grid-item">
                404
            </div>
            <div class="grid-item">
                <select class="slc" alt="4C + 0D + 4U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="400+0+4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="cuatrocientos cuatro">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                167
            </div>
            <div class="grid-item">
                <select class="slc" alt="1C + 6D + 7U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="100+60+7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ciento sesenta y siete">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                342
            </div>
            <div class="grid-item">
                <select class="slc" alt="3C + 4D + 2U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="300+40+2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="trescientos cuarenta y dos">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
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
                <img class="materialboxed" width="80%" src="img/7/respuesta.png">
            </center>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
        </div>
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_1_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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