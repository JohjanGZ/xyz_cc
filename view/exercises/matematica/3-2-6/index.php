<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item w um">UM</div>
            <div class="grid-item w c">C</div>
            <div class="grid-item w d">D</div>
            <div class="grid-item w u">U</div>
            <div class="grid-item clr">Descomposición</div>

            <div class="grid-item w">5</div>
            <div class="grid-item w">2</div>
            <div class="grid-item w">7</div>
            <div class="grid-item w">4</div>
            <div class="grid-item"><span class="text">5 UM <span class="s">+</span> 2 C <span class="s">+</span> 7 D <span class="s">+</span> 4 U</span></div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item w">1</div>
                <div class="grid-item w">3</div>
                <div class="grid-item w">9</div>
                <div class="grid-item w">6</div>
                <div class="grid-item">
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." UM</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." C</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." D</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." U</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">5</div>
                <div class="grid-item w">2</div>
                <div class="grid-item w">8</div>
                <div class="grid-item w">0</div>
                <div class="grid-item">
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." UM</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." C</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." D</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">9</div>
                <div class="grid-item w">3</div>
                <div class="grid-item w">7</div>
                <div class="grid-item w">8</div>
                <div class="grid-item">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." UM</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." C</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." D</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." U</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">3</div>
                <div class="grid-item w">6</div>
                <div class="grid-item w">4</div>
                <div class="grid-item w">9</div>
                <div class="grid-item">
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." UM</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." C</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." D</option>";
                        }
                    ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=1; $i < 21; $i++) { 
                            echo "<option value='$i'>".$i." U</option>";
                        }
                    ?>
                    </select>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_6() {
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