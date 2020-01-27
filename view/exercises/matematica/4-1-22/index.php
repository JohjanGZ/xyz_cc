<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $descompo = array('5','4','6','7','3','25','1');
    $decimales = array('1,70','1,65','1,58','1,60','1,62','1,65');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item"><span class="tn">Dato</span></div>
            <div class="grid-item"><span class="tc">Frecuencia</span></div>
            <div class="grid-item ">
                <select class="slc" alt="1,70">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="1,65">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="1,58">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="1,60">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="1,62">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="1,65">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($decimales); $i++) { 
                            echo "<option value='$decimales[$i]'>$decimales[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item ">
                <select class="slc" alt="25">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
        </div>
        <div class="image">
            <img src="<?= $dir ?>/img/1.png" alt="">
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_1_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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