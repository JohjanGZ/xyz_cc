<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

$escritura = array('El avión', 'El auto', '19 niños'); 
$numeros = array('7','4','2','5', '1');

?>
<div class="container-two">
    <div class="containerPrincipal">
        <div class="uno">
            <img src="img/4/grafico.png" class="img">
        </div>
        <div class="dos">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/bus.gif" alt=""> viajan 
                        <select class="slc" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/avion.gif" alt=""> viajan 
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/tren.gif" alt=""> viajan 
                        <select class="slc" alt="2">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/taxi.gif" alt=""> viajan 
                        <select class="slc" alt="1">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/barco.gif" id="barco" alt=""> viajan 
                        <select class="slc" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                
            </div>
        </div>
        <div class="tres">
            <div class="grid-container">
                <div class="grid-item titulo">
                    <h6>•​ Responde.</h6>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                    ​ •​ ¿Qué medio de transporte utilizaron más?
                        <select class="slc" alt="avion">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                    •​ ¿Qué medio de transporte utilizaron menos?
                        <select class="slc" alt="auto">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        •​ ¿Cuántos niños fueron encuestados? 
                        <select class="slc" alt="19">
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

function result_tipo_2_2_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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