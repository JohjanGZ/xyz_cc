<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('30 - 03 - 17','28 - 07 - 17','15 - 09 - 17','19 - 04 - 17','23 – 01 – 17','20 - 10 - 17','20 - 11 - 17','20 - 12 - 17',''); 
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="columna aleatorio">
                <div class="item">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="23 – 01 – 17">
                            <option value="23 – 01 – 17" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="30 - 03 - 17">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="19 - 04 - 17">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/4.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="28 - 07 - 17">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/5.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="15 - 09 - 17">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                </div>
                <div class="item">
                    <img src="<?= $dir ?>/img/6.png" alt="">
                    <span>
                        <select class="slc seleccion" alt="20 - 12 - 17">
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
function result_tipo_2_7_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 6) {
        console.log(r)
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>