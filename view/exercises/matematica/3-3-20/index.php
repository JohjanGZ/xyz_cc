<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('23','18','10','2','4','5','3','7','6','9');
?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col l6">
                <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
            </div>
            <div class="col l6">
                <div class="grid-container">
                    <div class="grid-item tt"><span></span>Comida</div>
                    <div class="grid-item tt"><span></span>Niños</div>
                    <div class="grid-item tt"><span></span>Niñas</div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/1.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select class="seleccion" alt="6">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item">
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
                        <img src="<?=$dir?>/img/2.png" class="img">
                    </div>
                    <div class="grid-item">
                        <select class="seleccion" alt="9">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="seleccion" alt="6">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <img src="<?=$dir?>/img/3.png" class="img">
                    </div>
                    <div class="grid-item">
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
                        <select class="seleccion" alt="10">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item tt">
                        Total
                    </div>
                    <div class="grid-item">
                        <select class="seleccion" alt="18">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select class="seleccion" alt="23">
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
function result_tipo_3_3_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
    if (r == 8) {
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