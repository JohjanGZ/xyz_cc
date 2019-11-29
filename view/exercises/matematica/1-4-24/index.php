<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $escritura = array('perro','gato','hámster','canario'); ?>
<div class="container-two">
    <div class="row">
        <div class="col s12 l4">
            <img src="<?=$dir?>/img/1.png" class="img materialboxed">
        </div>
        <div class="col s12 l8">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="pregunta">
                        <span>¿Cuántos alumnos prefieren como mascota al perro?</span>
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        <span>¿Cuántos alumnos prefieren como mascota al canario?</span>
                        <select class="slc" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        <span>¿Cuántos alumnos prefieren como mascota al hámster?</span>
                        <select class="slc" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        <span>¿Cuántos alumnos prefieren como mascota al gato?</span>
                        <select class="slc" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        <span>¿Cuál es la mascota que más  prefieren los alumnos?</span>
                        <select class="slc" alt="perro">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_4_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>