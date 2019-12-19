<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('63 148','24 648','34 181','72 420','53 613','64 272','85 205','27 546','27 547') ?>
<body>

    <div class="container-two">
        <div class="grid-option">
            63 148
            <span class="ms">→</span>
            63 149
        </div>
        <div class="grid-options">
            <div class="grid-option">
                <span class="ms">•</span>
                24 647
                <span class="ms">→</span>
                <select class="seleccion" alt="24 648">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                34 180
                <span class="ms">→</span>
                <select class="seleccion" alt="34 181">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                72 419
                <span class="ms">→</span>
                <select class="seleccion" alt="72 420">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                53 612
                <span class="ms">→</span>
                <select class="seleccion" alt="53 613">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                64 271
                <span class="ms">→</span>
                <select class="seleccion" alt="64 272">
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
function result_tipo_3_2_9() {
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