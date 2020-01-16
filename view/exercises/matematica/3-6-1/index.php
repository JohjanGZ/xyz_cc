<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $rspta = array('sumar 2','restar 2','sumar 8','restar 8','sumar 10','restar 10','sumar 4','restar 4','sumar 5','restar 5',) ?>
<body>

    <div class="container-two">
        <div class="grid-container">
            <div class="grid-options">
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="sumar 2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/2.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="sumar 8">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/3.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="restar 2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/4.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="restar 10">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/5.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="sumar 4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <!-- 234 -->
                <div class="grid-option">
                    <img src="<?=$dir?>/img/6.png" class="img">
                    <span class="ms">=</span>
                    <select class="slc" alt="restar 5">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($rspta); $i++) { 
                            echo "<option value='$rspta[$i]'>$rspta[$i]</option>";
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
function result_tipo_3_6_1() {
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
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>