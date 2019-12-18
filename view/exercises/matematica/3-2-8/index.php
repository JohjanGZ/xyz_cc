<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('43 727','43 726','95 135','95 134','52 674','85 204','85 205','27 546','27 547') ?>
<body>

    <div class="container-two">
        <div class="grid-option">
            75 341
            <span class="ms">→</span>
            75 342
        </div>
        <div class="grid-options">
            <div class="grid-option">
                <span class="ms">•</span>
                <select class="seleccion" alt="43 727">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
                <span class="ms">→</span>
                43 728
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                <select class="seleccion" alt="52 674">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
                <span class="ms">→</span>
                52 675
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                <select class="seleccion" alt="95 135">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
                <span class="ms">→</span>
                95 136
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                <select class="seleccion" alt="85 205">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
                <span class="ms">→</span>
                85 206
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                <select class="seleccion" alt="27 547">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
                <span class="ms">→</span>
                27 548
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
function result_tipo_3_2_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r=0;
    seleccion_lista();
    if (r == 5) {
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