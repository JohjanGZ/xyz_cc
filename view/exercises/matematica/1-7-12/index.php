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
            <div class="grid-options">
                <!-- 234 -->
                <div class="grid-option">
                    37
                    <span class="ms">-</span>
                    <select class="slc" alt="16">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">=</span>
                    21
                </div>
                <!-- 513 -->
                <div class="grid-option">
                    <select class="slc" alt="82">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">-</span>
                    32
                    <span class="ms">=</span>
                    50
                </div>
                <!-- 673 -->
                <div class="grid-option">
                    <select class="slc" alt="70">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">-</span>
                    40
                    <span class="ms">=</span>
                    30
                </div>
                <!-- 947 -->
                <div class="grid-option">
                    75
                    <span class="ms">-</span>
                    <select class="slc" alt="25">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">=</span>
                    50
                </div>
            </div>

            <div class="grid-options">
                <!-- 682 -->
                <div class="grid-option">
                    <select class="slc" alt="91">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">-</span>
                    21
                    <span class="ms">=</span>
                    70
                </div>
                <!-- 870 -->
                <div class="grid-option">
                    56
                    <span class="ms">-</span>
                    <select class="slc" alt="16">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">=</span>
                    40
                </div>
                <!-- 701 -->
                <div class="grid-option">
                    79
                    <span class="ms">-</span>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) {
                            if ($i == 0) {
                                echo "<option value='00'>00</option>";    
                            } else {
                                echo "<option value='$i'>$i</option>";
                            }
                        }
                    ?>
                    </select>
                    <span class="ms">=</span>
                    76
                </div>
                <!-- 457 -->
                <div class="grid-option">
                    <select class="slc" alt="37">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                    <span class="ms">-</span>
                    14
                    <span class="ms">=</span>
                    23
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_7_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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