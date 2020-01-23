<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('5 004','9 172','1 260','1 246');
    $descompo = array('6 000 + 600 + 40 + 3','8 000 + 70 + 5','1 000 + 200 + 40 + 6','5 000 + 700 + 20 + 5','1 000 + 5','5 000 + 4');
    $letras = array('Seis mil seiscientos cuarenta y tres','Nueve mil ciento setenta y dos','Cinco mil setecientos veintinco','Mil doscientos sesenta','Mil cinco','Ocho mil setenta y cinco');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item"><span class="tn">Número</span></div>
            <div class="grid-item"><span class="tc">Notación desarrollada</span></div>
            <div class="grid-item"><span class="tc">Lectura del número</span></div>
            <div class="grid-item">6 643</div>
            <div class="grid-item largo">
                <select class="slc" alt="6 000 + 600 + 40 + 3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Seis mil seiscientos cuarenta y tres">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="9 172">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">9 000 + 100 + 70 + 2</div>
            <div class="grid-item largo2">
                <select class="slc" alt="Nueve mil ciento setenta y dos">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="1 246">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">
                <select class="slc" alt="1 000 + 200 + 40 + 6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">Mil doscientos cuarenta y seis</div>
            <div class="grid-item">5 725</div>
            <div class="grid-item largo">
                <select class="slc" alt="5 000 + 700 + 20 + 5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Cinco mil setecientos veintinco">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="1 260">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">1 000 + 200 + 60</div>
            <div class="grid-item largo2">
                <select class="slc" alt="Mil doscientos sesenta">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">1 005</div>
            <div class="grid-item largo">
                <select class="slc" alt="1 000 + 5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Mil cinco">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="5 004">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">
                <select class="slc" alt="5 000 + 4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">Cinco mil cuatro</div>
            <div class="grid-item">8 075</div>
            <div class="grid-item largo">
                <select class="slc" alt="8 000 + 70 + 5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Ocho mil setenta y cinco">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_1_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 16) {
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