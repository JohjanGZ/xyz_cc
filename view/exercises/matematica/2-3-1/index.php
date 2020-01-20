<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('2','3','4','5','6','7','8','9','10','11','12');
?>
<?=$titulo?>
<div class="container-two">
    <div class="fila">
        <div class="image">
            <img src="<?= $dir ?>/img/1.png" alt="">
        </div>
    </div>
    <div class="problema">
        <div class="filaproblema">
            <div>Suma: </div>
            <div class="rojo">→</div>
            <div>
                <select class="slc seleccion" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="rojo">+</div>
            <div>
                <select class="slc seleccion" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="rojo">=</div>
            <div>
                <select class="slc seleccion" alt="12">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
        </div>
        <div class="filaproblema">
            <div>Multiplicación: </div>
            <div class="rojo">→</div>
            <div>
                <select class="slc seleccion" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div>veces</div>
            <div>
                <select class="slc seleccion" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="rojo">=</div>
            <div>
                <select class="slc seleccion" alt="12">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
        </div>
        <div class="filaproblema">
            <div></div>
            <div></div>
            <div>
                <select class="slc seleccion" alt="2">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="rojo">x</div>
            <div>
                <select class="slc seleccion" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="rojo">=</div>
            <div>
                <select class="slc seleccion" alt="12">
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
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_2_3_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 9) {
        correcto();
    } 
    else {
        incorrecto();
    }
}
</script>