<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('Treinta y cuatro mil seiscientos setenta y dos','Treinta y seis mil cuatrocientos veintiocho','Ochenta y cuatro mil doscientos setenta','Cincuenta y tres mil setecientos diecinueve','Veintinueve mil cuarenta y ocho','Veintinueve mil cuarenta y seis','Cincuenta y dos mil setecientos diecinueve') ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-campo">
                    <div class="grid-tabla cl dm">DM</div>
                    <div class="grid-tabla cl um">UM</div>
                    <div class="grid-tabla cl c">C</div>
                    <div class="grid-tabla cl d">D</div>
                    <div class="grid-tabla cl u">U</div>

                    <div class="grid-tabla">3</div>
                    <div class="grid-tabla">4</div>
                    <div class="grid-tabla">6</div>
                    <div class="grid-tabla">7</div>
                    <div class="grid-tabla">2</div>
                </div>
                <select class="slc" alt="Treinta y cuatro mil seiscientos setenta y dos">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <div class="grid-item">
                    <div class="grid-campo">
                        <div class="grid-tabla cl dm">DM</div>
                        <div class="grid-tabla cl um">UM</div>
                        <div class="grid-tabla cl c">C</div>
                        <div class="grid-tabla cl d">D</div>
                        <div class="grid-tabla cl u">U</div>

                        <div class="grid-tabla">3</div>
                        <div class="grid-tabla">6</div>
                        <div class="grid-tabla">4</div>
                        <div class="grid-tabla">2</div>
                        <div class="grid-tabla">8</div>
                    </div>
                    <select class="slc" alt="Treinta y seis mil cuatrocientos veintiocho">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item">
                    <div class="grid-campo">
                        <div class="grid-tabla cl dm">DM</div>
                        <div class="grid-tabla cl um">UM</div>
                        <div class="grid-tabla cl c">C</div>
                        <div class="grid-tabla cl d">D</div>
                        <div class="grid-tabla cl u">U</div>

                        <div class="grid-tabla">8</div>
                        <div class="grid-tabla">4</div>
                        <div class="grid-tabla">2</div>
                        <div class="grid-tabla">7</div>
                        <div class="grid-tabla">0</div>
                    </div>
                    <select class="slc" alt="Ochenta y cuatro mil doscientos setenta">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="grid-item">
                    <div class="grid-campo">
                        <div class="grid-tabla cl dm">DM</div>
                        <div class="grid-tabla cl um">UM</div>
                        <div class="grid-tabla cl c">C</div>
                        <div class="grid-tabla cl d">D</div>
                        <div class="grid-tabla cl u">U</div>

                        <div class="grid-tabla">5</div>
                        <div class="grid-tabla">2</div>
                        <div class="grid-tabla">7</div>
                        <div class="grid-tabla">1</div>
                        <div class="grid-tabla">9</div>
                    </div>
                    <select class="slc" alt="Cincuenta y dos mil setecientos diecinueve">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
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
    </div>
</body>


<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_3() {
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