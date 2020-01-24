<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('1','4','59 049','27','0','32','216','9');
    $desarrollo = array('9 × 9 × 9 × 9 × 9','1 × 1 × 1 × 1 × 1 × 1','3 × 3 × 3','2 × 2','6 × 6 × 6','0 × 0 × 0 × 0 × 0 × 0 × 0 × 0','3 × 3','2 × 2 × 2 × 2 × 2','8 × 8 × 8 × 8');
    $letras = array('Uno a la sexta','Tres al cubo','Dos al cuadrado','Nueve a la quinta','Seis al cubo','Cero a la octava','Dos a la quinta','Tres al cuadrado');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item"><span class="tn">Potencia indicada</span></div>
            <div class="grid-item"><span class="tc">Se lee</span></div>
            <div class="grid-item"><span class="tc">Desarrollo</span></div>
            <div class="grid-item"><span class="tc">Potencia</span></div>
            <div class="grid-item">2 <span class="potencia">2</span> </div>
            <div class="grid-item largo">
                <select class="slc" alt="Dos al cuadrado">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
            <select class="slc" alt="2 × 2">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">3 <span class="potencia">3</span> </div>
            <div class="grid-item largo">
                <select class="slc" alt="Tres al cubo">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="3 × 3 × 3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="27">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">1 <span class="potencia">6</span> </div>
            <div class="grid-item largo">
            <select class="slc" alt="Uno a la sexta">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="1 × 1 × 1 × 1 × 1 × 1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">6 <span class="potencia">3</span> </div>
            <div class="grid-item largo">
            <select class="slc" alt="Seis al cubo">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="6 × 6 × 6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            <select class="slc" alt="216">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">9 <span class="potencia">5</span> </div>
            <div class="grid-item largo">
                <select class="slc" alt="Nueve a la quinta">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="9 × 9 × 9 × 9 × 9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="59 049">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">0 <span class="potencia">8</span> </div>
            <div class="grid-item largo">
            <select class="slc" alt="Cero a la octava">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item largo2">
                <select class="slc" alt="0 × 0 × 0 × 0 × 0 × 0 × 0 × 0">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($desarrollo); $i++) { 
                            echo "<option value='$desarrollo[$i]'>$desarrollo[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="0">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
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
function result_tipo_4_1_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 18) {
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