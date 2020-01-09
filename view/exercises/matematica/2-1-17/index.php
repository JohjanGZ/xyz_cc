<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('cangrejos','tiburones','estrellas de mar','caballitos de mar');
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/1.png" alt="">
    </div>
    <div class="table">
        <h6 class="preg">Responde</h6>
        <div class="minitable">
            <div class="pregunta">
            • ¿Qué animal tiene mayor cantidad? 
                <span>
                    <select class="slc seleccion" alt="estrellas de mar">
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
            • ¿Qué animal tiene menor cantidad?
                <span>
                    <select class="slc seleccion" alt="tiburones">
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
            • ¿Cuántas estrellas de mar más hay que caballitos de mar?
                <span>
                    <select class="slc seleccion" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 7; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            • ¿Cuántos cangrejos más hay que tiburones?
                <span>
                    <select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 7; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            • ¿Cuántos animales hay en total?
                <span>
                    <select class="slc seleccion" alt="16">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=10; $i < 20; $i++) { 
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
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">

// Formulario - Registrados

function result_tipo_2_1_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    
    if (r == 5 ) {
        console.log(r);
        localStorage.setItem("Nota2-3-24", "2");
        localStorage.setItem("Time2-3-24", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-3-24", "0");
        localStorage.setItem("Time2-3-24", tiempo);

    }
}

</script>