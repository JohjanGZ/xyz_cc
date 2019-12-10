<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$extension = array('F={ a, e, i, a, o}','F={a, u, o, u, e}','F={a, e, i, o, u}','F={a, b, c, d, e, f}','F={primavera, verano, otoño, invierno}','F={primavera, verano, otoño, otoño}'); 
$comprension = array('F={Vocales}','F={Abecedario}','F={Vocales de la palabra MURCIÉLAGO}','F={Estaciones del año}');
?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-box">
                <div class="grid-item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="grid-item">
                    <div class="grid-determinacion">
                        <div class="grid-option">
                            <span class="opt">•</span> Por extensión:
                            <select class="slc" alt="<?=$extension[2]?>">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($extension); $i++) { 
                                        echo "<option value='$extension[$i]'>$extension[$i]</option>";
                                    }                                
                                ?>
                            </select>
                        </div>
                        <div class="grid-option">
                            <span class="opt">•</span> Por comprensión:
                            <select class="slc" alt="<?=$comprension[0]?>">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($comprension); $i++) { 
                                        echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                                    }                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item">
                    <div class="grid-determinacion">
                        <div class="grid-option">
                            <span class="opt">•</span> Por extensión:
                            <select class="slc" alt="<?=$extension[4]?>">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($extension); $i++) { 
                                        echo "<option value='$extension[$i]'>$extension[$i]</option>";
                                    }                                
                                ?>
                            </select>
                        </div>
                        <div class="grid-option">
                            <span class="opt">•</span> Por comprensión:
                            <select class="slc" alt="<?=$comprension[3]?>">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($comprension); $i++) { 
                                        echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                                    }                                
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <img src="<?=$dir?>/img/2.png" class="img">
                </div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
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
function result_tipo_3_0_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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