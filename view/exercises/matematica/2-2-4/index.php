<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $escritura = array('perro','gato','hámster','canario'); ?>
<div class="container-two">
    <div class="row">
        <div class="col s5">
            <img src="img/4/grafico.png" class="img materialboxed">
        </div>
        <div class="col s7">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/bus.gif" alt=""> viajan 
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
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
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/tren.gif" alt=""> viajan 
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/taxi.gif" alt=""> viajan 
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                        niños.
                    </div>
                </div>
                <div class="grid-item">
                    <div class="pregunta">
                        En <img src="img/4/barco.gif" alt=""> viajan 
                        <select class="slc" alt="7">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=1; $i < 101; $i++) { 
                                    echo "<option value='$i'>$i</option>";
                                }
                            ?>
                        </select>
                        niños.
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