<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('7420','7430','3650','3660','7140','7150','1770','1780','2650','2660','3710','3720','7530','3540','7430','7440','8120','8130');
?>
<body>

    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item-head clr">4 210</div>
            <div class="grid-item-head clr">4 213</div>
            <div class="grid-item-head clr">4 220</div>
        </div>
        <div class="grid-container">
            <!-- 1 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="7420">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="grid-item">7 427</div>
                <div class="grid-item">
                    <select class="slc" alt="7430">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <!-- 2 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="3650">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="grid-item">3 654</div>
                <div class="grid-item">
                    <select class="slc" alt="3660">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <!-- 3 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="7140">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="grid-item">7 143</div>
                <div class="grid-item">
                    <select class="slc" alt="7150">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <!-- 4 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="1770">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="grid-item">1 773</div>
                <div class="grid-item">
                    <select class="slc" alt="1780">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <!-- 5 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="2650">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
                <div class="grid-item">2 654</div>
                <div class="grid-item">
                    <select class="slc" alt="2660">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
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
function result_tipo_3_1_14() {
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