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
        <div class="grid-options">
            <div class="grid-option">
                291
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="200">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="90">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            if ($i == 0) {
                                echo "<option value='00'>00</option>";    
                            } else {
                                echo "<option value='$i'>$i</option>";
                            }
                        }
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                107
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="100">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="00">
                    <option value="" disabled selected></option>
                    <?php
                       for ($i=0; $i < 501; $i++) { 
                        if ($i == 0) {
                            echo "<option value='00'>00</option>";    
                        } else {
                            echo "<option value='$i'>$i</option>";
                        }
                    }
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                368
                <img src="<?=$dir?>/img/1.png" class="img">
                <select class="slc" alt="300">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="60">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            if ($i == 0) {
                                echo "<option value='00'>00</option>";    
                            } else {
                                echo "<option value='$i'>$i</option>";
                            }
                        } 
                    ?>
                </select>
                <span class="ms">+</span>
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 501; $i++) { 
                            echo "<option value='$i'>$i</option>";
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
function result_tipo_1_5_14() {
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