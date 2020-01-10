<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('1','2','3','4','5','6','7','8','9','10','11','12','13','14','15'); 
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="image">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
            <div class="problema">
                <div>
                    <span>P</span>
                    <span class="rojo"> = </span>
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
                    <span class="rojo">+</span>
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
                    <span class="rojo">+</span>
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
                    <span class="rojo">+</span>
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
                    <span class="rojo">+</span>
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
                    <span class="rojo">=</span>
                    <span>
                        <select class="slc seleccion" alt="13">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                        </select>
                    </span>
                </div>
                <div class="final">
                    <span>El perímetro de la puerta es</span>
                    <span>
                        <select class="slc seleccion" alt="13">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span>
                        cm.
                    </span>
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
function result_tipo_2_4_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    
    if (r == 7) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>