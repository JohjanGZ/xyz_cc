<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('unidades','decena','centena','millar'); ?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="problemas">
                <div class="problema">
                    <span>• En 1 896, el 9 representa la
                        <span>
                            <select class="slc" alt="decena">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span> y vale 90 <span>
                            <select class="slc" alt="unidades">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span>
                    </span>
                </div>
                <div class="problema">
                    <span>• En 4 675, el 6 representa la
                        <span>
                            <select class="slc" alt="centena">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span> y vale 600 <span>
                            <select class="slc" alt="unidades">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span>
                    </span>
                </div>
                <div class="problema">
                    <span>• En 7 542, el 4 representa la
                        <span>
                            <select class="slc" alt="decena">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span> y vale 40 <span>
                            <select class="slc" alt="unidades">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span>
                    </span>
                </div>
                <div class="problema">
                    <span>• En 6 976, el 6 representa el
                        <span>
                            <select class="slc" alt="millar">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span> y vale 6 000 <span>
                            <select class="slc" alt="unidades">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i=0; $i < count($escritura); $i++) { 
                                    echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                                }
                            ?>
                            </select>
                        </span>
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
function result_tipo_2_7_19() {
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