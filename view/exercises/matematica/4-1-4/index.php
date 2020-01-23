<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('1 100','8 530','2 743','4 002','2 700','9 795');
    $descompo = array('5UM + 2C + 3D + 7U','1UM + 1C','6UM + 8C + 9D + 1U','4UM + 2U','9UM + 3D +7U','9UM + 7C + 9D + 5U');
    $letras = array('Nueve mil treinta y siete','Ocho mil quinientos treinta','Cinco mil doscientos treinta y siete','Seis mil ochocientos noventa y uno','Dos mil setecientos cuarenta y tres','Cuatro mil dos','Dos mil setecientos');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item"><span class="tn">La descomposición</span></div>
            <div class="grid-item"><span class="tc">Corresponde al número</span></div>
            <div class="grid-item"><span class="tc">Se lee</span></div>
            <div class="grid-item">2UM + 7C + 4D + 3U</div>
            <div class="grid-item">
                <select class="slc" alt="2 743">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Dos mil setecientos cuarenta y tres">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            8UM + 5C + 3D
            </div>
            <div class="grid-item">
                <select class="slc" alt="8 530">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Ocho mil quinientos treinta">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">
                <select class="slc" alt="5UM + 2C + 3D + 7U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            5 237
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Cinco mil doscientos treinta y siete">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">
                <select class="slc" alt="9UM + 7C + 9D + 5U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="9 795">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">Nueve mil setecientos noventa y cinco</div>
            <div class="grid-item largo">
                <select class="slc" alt="6UM + 8C + 9D + 1U">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">6 891</div>
            <div class="grid-item largo2">
                <select class="slc" alt="Seis mil ochocientos noventa y uno">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">4UM + 2U</div>
            <div class="grid-item">
                <select class="slc" alt="4 002">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Cuatro mil dos">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo">
                <select class="slc" alt="1UM + 1C">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($descompo); $i++) { 
                            echo "<option value='$descompo[$i]'>$descompo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="1 100">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">Mil cien</div>
            <div class="grid-item largo">9UM + 3D +7U</div>
            <div class="grid-item largo">9 037
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="Nueve mil treinta y siete">
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
function result_tipo_4_1_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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