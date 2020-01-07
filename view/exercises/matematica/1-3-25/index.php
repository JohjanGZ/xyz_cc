<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('Noventa y tres','Setenta y siete','Setenta y cuatro','Noventa y nueve'); ?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Escritura numérica</div>
            <div class="grid-item">
                74
            </div>
            <div class="grid-item">
                <select class="slc" alt="Setenta y cuatro">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item">
                <select class="slc" alt="59">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                Cincuenta y nueve
            </div>

            <div class="grid-item">
                93
            </div>
            <div class="grid-item">
                <select class="slc" alt="Noventa y tres">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item">
                <select class="slc" alt="83">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
            Ochenta y tres
            </div>

            <div class="grid-item">
                99
            </div>
            <div class="grid-item">
                <select class="slc" alt="Noventa y nueve">
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
function result_tipo_1_3_25() {
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