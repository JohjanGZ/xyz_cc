<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numbers = array('1','2','3','4'); ?>
<?php $arrows = array('🠐','🠑','🠒','🠓'); ?>
<?php $arrDesc = array('iz','ar','de','ab'); ?>
<body>
    <div class="container-two">
        <div class="row">
            <div class="col s10">
                <img src="img/2-1-7/imagen.png" alt="">
            </div>
        </div>
        <div class="grid-container">
        
        <div class="grid-item">
                <select class="slc" alt="u">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="d">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="d">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="u">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="t">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="d">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="d">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="u">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="u">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="c">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="t">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="t">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="t">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!--FLECHAS ar ab de iz-->
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ab">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ar">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ab">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ab">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ar">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="ab">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="de">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($arrows); $i++) { 
                            echo "<option value='$arrDesc[$i]'>$arrows[$i]</option>";
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
                <img class="materialboxed" width="80%" src="img/2-1-3/respuesta.png">
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
function result_tipo_2_1_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 26 && otros == 0) {
        console.log("otros: ", otros, "y r: ", r);
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log("otros: ", otros, "y r: ", r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>