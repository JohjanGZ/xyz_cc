<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('4','7','9','1','5','2','8','3','6');
?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="mult">
                <div class="grid-item tt">
                    Multiplicación
                </div>
                <div class="grid-item">
                    2
                    <span>x</span>
                    <select class="seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                    <span>=</span>
                    14
                </div>
                <div class="grid-item">
                    7
                    <span>x</span>
                    <select class="seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                    <span>=</span>
                    21
                </div>
                <div class="grid-item">
                    9
                    <span>x</span>
                    <select class="seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                    <span>=</span>
                    36
                </div>
                <div class="grid-item">
                    6
                    <span>x</span>
                    <select class="seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                    <span>=</span>
                    42
                </div>
                <div class="grid-item">
                    3
                    <span>x</span>
                    <select class="seleccion" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                    <span>=</span>
                    27
                </div>
            </div>
            <div class="divi">
                <div class="grid-item tt">
                    División
                </div>
                <div class="grid-item">
                    14
                    <span>÷</span>
                    2
                    <span>=</span>
                    <select class="seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="grid-item">
                    21
                    <span>÷</span>
                    7
                    <span>=</span>
                    <select class="seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="grid-item">
                    36
                    <span>÷</span>
                    9
                    <span>=</span>
                    <select class="seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div class="grid-item">
                    42
                    <span>÷</span>
                    6
                    <span>=</span>
                    <select class="seleccion" alt="7">
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
                    3
                    <span>=</span>
                    <select class="seleccion" alt="9">
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
function result_tipo_3_1_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
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