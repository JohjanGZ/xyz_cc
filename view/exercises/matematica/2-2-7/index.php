<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('700 + 20 + 4','600 + 10 + 9','900 + 60 + 1','700 + 20 + 8','900 + 60 + 8'); ?>
<?php $numero = array('619', '961', '718','971', '728'); ?>
<?php $letra = array('Seiscientos sesenta','Novecientos diecinueve','Seiscientos diecinueve','Novecientos sesenta y uno','Setecientos veintiocho'); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Valor Posicional</div>
            <div class="grid-item tt bl"><span></span>Notación desarrollada</div>
            <div class="grid-item tt bn"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Se lee</div>
            <div class="grid-item">
                8C + 3D + 6D
            </div>
            <div class="grid-item">
                800 + 30 + 6
            </div>
            <div class="grid-item">
                836
            </div>
            <div class="grid-item">
                Ochocientos treinta y seis
            </div>
            <div class="grid-item">
                1D + 9U + 6C
            </div>
            <div class="grid-item">
                <select class="slc" alt="600 + 10 + 9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="619">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="Seiscientos diecinueve">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letra); $i++) { 
                            echo "<option value='$letra[$i]'>$letra[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                1U + 9C + 6D
            </div>
            <div class="grid-item">
                <select class="slc" alt="900 + 60 + 1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="961">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="Novecientos sesenta y uno">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letra); $i++) { 
                            echo "<option value='$letra[$i]'>$letra[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                7C + 2D + 8U
            </div>
            <div class="grid-item">
                <select class="slc" alt="700 + 20 + 8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="728">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="Setecientos veintiocho">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letra); $i++) { 
                            echo "<option value='$letra[$i]'>$letra[$i]</option>";
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
                <img class="materialboxed" width="80%" src="img/7/respuesta.png">
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
function result_tipo_2_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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