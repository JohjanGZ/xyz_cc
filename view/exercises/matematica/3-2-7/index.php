<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$num = array('45 821','42 654','57 301','31 590','41 584','12 638','41 648','19 437','65 218','10 304');
$num2 = array('26 712','90 320','65 830','51 632','12 640','53 630','15 630','53 750','42 710','11 650') ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                    <div class="grid-body">
                    <div class="grid-option">
                            Nº menor:
                            <select class="seleccion" alt="10 304">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="grid-option">
                            Nº mayor:
                            <select class="seleccion" alt="65 218">
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
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                    <div class="grid-body">
                        <div class="grid-option">
                            Nº menor:
                            <select class="seleccion" alt="11 650">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($num2); $i++) { 
                                    echo "<option value='$num2[$i]'>$num2[$i]</option>";
                                }
                            ?>
                            </select>
                        </div>
                        <div class="grid-option">
                            Nº mayor:
                            <select class="seleccion" alt="90 320">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($num2); $i++) { 
                                    echo "<option value='$num2[$i]'>$num2[$i]</option>";
                                }
                            ?>
                            </select>
                        </div>
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
function result_tipo_3_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
    if (r == 4) {
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