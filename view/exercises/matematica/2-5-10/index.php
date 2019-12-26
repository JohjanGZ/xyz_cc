<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
    $numeros = array('1','2','3','5','7','9','12','4','15','18');
?>
<div class="container-two">
    <div class="content">
        <div class="fila">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
            <div class="problemas">
            <div class="problema">
                <span>
                            2
                </span>
                <span>x</span>
                <span>
                    <select class="slc seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>=</span>
                <span>
                   14
                </span>
            </div>
            <div class="problema">
                <span>
                    7
                </span>
                <span>x</span>
                <span>
                    <select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>=</span>
                <span>
                    14
                </span>
            </div>
            <div class="problema">
                <span>
                    14
                </span>
                <span>÷</span>
                <span>
                   2
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="problema">
                <span>
                    14
                </span>
                <span>x</span>
                <span>
                    7
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            </div>
        </div>
        <div class="fila">
            <div class="image">
                <img src="<?= $dir ?>/img/2.png" class="materialboxed" alt="">
            </div>
            <div class="problemas">
            <div class="problema">
                <span>
                            3
                </span>
                <span>x</span>
                <span>
                    <select class="slc seleccion" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="15">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="problema">
                <span>
                            5
                </span>
                <span>x</span>
                <span>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="15">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="problema">
                <span>
                    <select class="slc seleccion" alt="15">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>÷</span>
                <span>
                    3
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="problema">
                <span>
                    <select class="slc seleccion" alt="15">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>÷</span>
                <span>
                    5
                </span>
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
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


function result_tipo_2_5_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 12) {
        console.log(r);
        localStorage.setItem("Nota2-4-8", "2");
        localStorage.setItem("Time2-4-8", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-8", "0");
        localStorage.setItem("Time2-4-8", tiempo);

    }
}
</script>