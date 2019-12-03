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
            <!-- 261 -->
            <div class="grid-option">
                <span class="le">a.</span>
                <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                <span class="ms">=</span>
                <select class="slc" alt="261">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 947 -->
            <div class="grid-option">
                <span class="le">b.</span>
                900
                <span class="ms">+</span>
                40
                <span class="ms">+</span>
                7
                <span class="ms">=</span>
                <select class="slc" alt="947">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 241 -->
            <div class="grid-option">
                <span class="le">c.</span>
                <img src="<?=$dir?>/img/3.png" class="img materialboxed">
                <span class="ms">=</span>
                <select class="slc" alt="241">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 803 -->
            <div class="grid-option">
                <span class="le">d.</span>
                800
                <span class="ms">+</span>
                3
                <span class="ms">+</span>
                <select class="slc" alt="803">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 113 -->
            <div class="grid-option">
                <span class="le">e.</span>
                <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                <span class="ms">=</span>
                <select class="slc" alt="113">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 204 -->
            <div class="grid-option">
                <span class="le">f.</span>
                <img src="<?=$dir?>/img/4.png" class="img materialboxed">
                <span class="ms">=</span>
                <select class="slc" alt="204">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 1001; $i++) { 
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
function result_tipo_1_5_17() {
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