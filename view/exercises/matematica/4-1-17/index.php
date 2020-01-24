<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $desarrollo = array('1','148','21','8','4','7','3','2');
?>

<body>
    <div class="container">
        <div class="row">
            <div class="header">
                <div>División</div>
                <div>Elementos</div>
            </div>
            <div class="content">
                <div class="gridItem">
                    <div class="tabla">
                        <div>1</div>
                        <div>4</div>
                        <div>8</div>
                        <div class="divisorLine">7</div>
                        <div class="linebottom">
                            <select class="slc" alt="1">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="linebottom">
                            <select class="slc" alt="4">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="linebottom"></div>
                        <div class="largo">
                            <select class="slc" alt="21">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div>-</div>
                        <div>-</div>
                        <div>
                            <select class="slc" alt="8">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div class="linebottom">
                            <select class="slc" alt="7">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div><select class="slc" alt="1">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select></div>
                    </div>
                </div>
                <div class="gridData">
                    <div class="data">
                        <div>Dividendo = </div>
                        <div class="largo">
                            <select class="slc" alt="148">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div>Divisor = </div>
                        <div class="largo">
                            <select class="slc" alt="7">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div>Cociente = </div>
                        <div class="largo">
                            <select class="slc" alt="21">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div>Residuo = </div>
                        <div class="largo">
                            <select class="slc" alt="1">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($desarrollo); $i++) { 
                                        echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
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
function result_tipo_4_1_17() {
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