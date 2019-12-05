<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

$escritura = array('Brasil', '24', 'Francia', '19'); 

?>
<div class="container-two">
    <div class="containerPrincipal">
        <div class="uno">
            <img src="img/7/imagen.png" class="img">
        </div>
        <div class="tres">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="pregunta">
                    ​ •​ ¿Cuántos padres fueron encuestados?
                        <select class="slc" alt="24">
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
                    •​ ¿Cuál es el país que más prefieren?
                        <select class="slc" alt="Brasil">
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
                    •​ ¿Cuál es el país que menos prefieren? 
                        <select class="slc" alt="Francia">
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
                    •​ ​ ¿Qué cantidad de padres prefieren Brasil y Costa Rica?
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

function result_tipo_2_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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