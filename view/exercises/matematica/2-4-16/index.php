<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('patos','cerdos','caballos','vacas','cisnes','perros');
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
    </div>
    <div class="table">
        <h6 class="preg">Responde</h6>
        <div class="minitable aleatorio">
            <div class="pregunta">
                • ¿Qué animal hay en mayor cantidad?
                <span>
                    <select class="slc seleccion" alt="cerdos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿Qué animal hay en menor cantidad?
                <span>
                    <select class="slc seleccion" alt="perros">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿Cuántos animales hay en total?
                <span>
                    <select class="slc seleccion" alt="21">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=16; $i < 26; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿Cuántos cisnes hay dentro del lago?
                <span>
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 8; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿Cuántos cerdos están en el lodo?
                <span>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 8; $i++) { 
                            echo "<option value='$i'>$i</option>";
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
<script src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
function result_tipo_2_4_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 5) {
        console.log(r);
        localStorage.setItem("Nota2-1-16", "2");
        localStorage.setItem("Time2-1-16", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-1-16", "0");
        localStorage.setItem("Time2-1-16", tiempo);

    }
}
</script>