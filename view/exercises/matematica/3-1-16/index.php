<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('7400','7500','3600','3700','7100','7200','1700','1800','2600','2700','3700','3800','7500','7600','7400','7500','8100','8200');
?>
<body>

    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item-head clr">4 200</div>
            <div class="grid-item-head clr">4 213</div>
            <div class="grid-item-head clr">4 300</div>
        </div>
        <div class="grid-container">
            <!-- 1 -->
            <div class="grid-caja">
                <div class="grid-item">
                    <select class="slc" alt="7400">
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
                    <select class="slc" alt="7500">
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
                    <select class="slc" alt="3600">
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
                    <select class="slc" alt="3700">
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
                    <select class="slc" alt="7100">
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
                    <select class="slc" alt="7200">
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
                    <select class="slc" alt="1700">
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
                    <select class="slc" alt="1800">
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
                    <select class="slc" alt="2600">
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
                    <select class="slc" alt="2700">
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
function result_tipo_3_1_16() {
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