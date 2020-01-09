<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('pentagonales','cuadradas','triangulares','hexagonales');
    $numbers
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
    </div>
    <div class="table">
        <div class="minitable aleatorio">
            <div class="pregunta">
            • ¿De qué tipo de cometa hay mayor cantidad?
                <span>
                    <select class="slc seleccion" alt="cuadradas">
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
            • ¿De qué tipo de cometa hay 6U y 1D?
                <span>
                    <select class="slc seleccion" alt="hexagonales">
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
            • ¿De qué tipo de cometa hay menor cantidad? 
                <span>
                    <select class="slc seleccion" alt="triangulares">
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
                • ¿Cuántas cometas cuadradas más que cometas triangulares hay?
                <span>
                    <select class="slc seleccion" alt="11">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 13; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            • ¿Cuántas cometas hexagonales más que cometas triangulares hay? 
                <span>
                    <select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < 13; $i++) { 
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
function result_tipo_2_1_19() {
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