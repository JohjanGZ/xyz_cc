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
            <!-- 234 -->
            <div class="grid-option">
                <div class="grid-suboption">
                    <div class="grid-box-suboption"><img src="<?=$dir?>/img/2.png" class="img"></div>
                    <div class="grid-box-suboption">
                        <img src="<?=$dir?>/img/3.png" class="img h">
                        <img src="<?=$dir?>/img/3.png" class="img h">
                    </div>
                    <div class="grid-box-suboption"> 
                        <img src="<?=$dir?>/img/4.png" class="img">
                        <img src="<?=$dir?>/img/4.png" class="img">
                    </div>
                </div>
                <div class="grid-suboption">
                    <select class="slc" alt="32">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 101; $i++) { 
                            if ($i == 1) {
                                echo "<option value='$i'>$i sol</option>";
                            } else {
                                echo "<option value='$i'>$i soles</option>";
                            }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <!-- 234 -->
            <div class="grid-option">
                <div class="grid-suboption">
                    <img src="<?=$dir?>/img/1.png" class="img h">
                    <img src="<?=$dir?>/img/1.png" class="img h">
                    <img src="<?=$dir?>/img/1.png" class="img h">
                </div>
                <div class="grid-suboption">
                    <select class="slc" alt="30">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 101; $i++) { 
                            if ($i == 1) {
                                echo "<option value='$i'>$i sol</option>";
                            } else {
                                echo "<option value='$i'>$i soles</option>";
                            }
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
function result_tipo_1_5_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
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