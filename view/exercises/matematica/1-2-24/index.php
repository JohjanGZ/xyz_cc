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
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="ms">+</span>
                    8
                    <span class="ms">=</span>
                    15
                    <span class="ms">→</span>
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 513 -->
                <div class="grid-option">
                    7
                    <span class="ms">+</span>
                    <img src="<?=$dir?>/img/2.png" class="img">
                    <span class="ms">=</span>
                    21
                    <span class="ms">→</span>
                    <img src="<?=$dir?>/img/2.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="14">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 673 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/3.png" class="img">
                    <span class="ms">-</span>
                    7
                    <span class="ms">=</span>
                    10
                    <span class="ms">→</span>
                    <img src="<?=$dir?>/img/3.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="17">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_24() {
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
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>