<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('7,8','2,7','49,6','36','43,7','2,39','7,69','12,432','64,366','7,65','9,13','5,68','9,46','0,3432','3,736','8,925','5,174','0,4156');
?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                78
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="7,8">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                27
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="2,7">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                496
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="49,6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>

            <div class="grid-item">
                360
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="36">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                437
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="43,7">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                23,9
                <span>÷</span>
                10
                <span>=</span>
                <select class="seleccion" alt="2,39">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>

            <div class="grid-item">
                765
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="7,65">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                913
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="9,13">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                568
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="5,68">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>

            <div class="grid-item">
                946
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="9,46">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                34,32
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="0,3432">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item">
                373,6
                <span>÷</span>
                100
                <span>=</span>
                <select class="seleccion" alt="3,736">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_4_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
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