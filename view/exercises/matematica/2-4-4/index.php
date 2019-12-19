<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
    $numeros = array('2','4','5','8','10','12','16');
?>
<div class="container-two">
    <div class="content">
        <div class="fila">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" alt="">+
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="problema">
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
                    <select class="slc seleccion" alt="10">
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
        <div class="fila">
            <div class="image">
                <img src="<?= $dir ?>/img/2.png" alt="">+
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="problema">
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
                <span>x</span>
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
                <span>=</span>
                <span>
                    <select class="slc seleccion" alt="16">
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


function result_tipo_2_4_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    
    if (r == 6) {
        console.log(r);
        localStorage.setItem("Nota2-4-4", "2");
        localStorage.setItem("Time2-4-4", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-4", "0");
        localStorage.setItem("Time2-4-4", tiempo);

    }
}
</script>