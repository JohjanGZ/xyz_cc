<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $nombre  = array('rana','conejo','tortuga','armadillo','cerdito') ?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?=$dir?>/img/principal.png" class="img materialboxed">
                <div class="campo">
                    <div class="grid-body">
                        1.er
                        <select class="slc" alt="<?=$nombre[0]?>">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($nombre); $i++) { 
                                echo "<option value='$nombre[$i]'>$nombre[$i]</option>";
                            }
                        ?>
                        </select>
                        2.°
                        <select class="slc" alt="<?=$nombre[1]?>">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($nombre); $i++) { 
                                echo "<option value='$nombre[$i]'>$nombre[$i]</option>";
                            }
                        ?>
                        </select>
                        3.er
                        <select class="slc" alt="<?=$nombre[2]?>">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($nombre); $i++) { 
                                echo "<option value='$nombre[$i]'>$nombre[$i]</option>";
                            }
                        ?>
                        </select>
                        4.°
                        <select class="slc" alt="<?=$nombre[3]?>">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($nombre); $i++) { 
                                echo "<option value='$nombre[$i]'>$nombre[$i]</option>";
                            }
                        ?>
                        </select>
                        5.°
                        <select class="slc" alt="<?=$nombre[4]?>">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($nombre); $i++) { 
                                echo "<option value='$nombre[$i]'>$nombre[$i]</option>";
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
function result_tipo_1_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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