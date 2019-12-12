<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('3000','2425','1508','5051','2004','2442','2058','3326','1516','1089','1920','9118')?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                    <div class="grid-body">
                        <select class="slc" alt="2442">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                    <div class="grid-body">
                        <select class="slc" alt="3326">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_1_4() {
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