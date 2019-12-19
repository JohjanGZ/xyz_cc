<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
    $numeros = array('4','6','8','12','14','18');
?>
<div class="container-two">
    <div class="content ">
        <div class="contentItem">
            <div class="item">
                <span>• 2</span>
                <span class="rojo">×</span>
                <span>4</span>
                <span class="rojo">=</span>
                <span>
                    <select class="slc seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="item2">
                <span>El doble de 4 es</span>
                <span>
                    <select class="slc seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>.</span>
            </div>
        </div>
        <div class="contentItem">
            <div class="item">
                <span>• 2</span>
                <span class="rojo">×</span>
                <span>6</span>
                <span class="rojo">=</span>
                <span>
                    <select class="slc seleccion" alt="12">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="item2">
                <span>El doble de 6 es</span>
                <span>
                    <select class="slc seleccion" alt="12">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>.</span>
            </div>
        </div>
        <div class="contentItem">
            <div class="item">
                <span>• 2</span>
                <span class="rojo">×</span>
                <span>9</span>
                <span class="rojo">=</span>
                <span>
                    <select class="slc seleccion" alt="18">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
            </div>
            <div class="item2">
                <span>El doble de 9 es</span>
                <span>
                    <select class="slc seleccion" alt="18">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </span>
                <span>.</span>
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


function result_tipo_2_4_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 10) {
        console.log(r);
        localStorage.setItem("Nota2-4-6", "2");
        localStorage.setItem("Time2-4-6", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-6", "0");
        localStorage.setItem("Time2-4-6", tiempo);

    }
}
</script>