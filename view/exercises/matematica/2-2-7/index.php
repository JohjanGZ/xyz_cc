<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $escritura = array('quinientos sesenta y dos','Seiscientos diecinueve','Setecientos veintiocho','cuatrocientos ochenta y tres','Novecientos sesenta y uno'); 
    $suma = array('600 + 10 + 9','900 + 20 + 8','700 + 20 + 8','400 + 20 + 8','900 + 50 + 1','700 + 90 + 8','900 + 60 + 1','');
    $numeros = array('961','572','364','728','619','');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Valor posicional	</div>
            <div class="grid-item tt"><span></span>Notación desarrollada</div>
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Se lee</div>
            <div class="grid-item">
            8C + 3D + 6D	
            </div>
            <div class="grid-item grande">
            800 + 30 + 6	
            </div>

            <div class="grid-item smal">
                836
            </div>
            <div class="grid-item smal">
                Ochocientos treinta y seis
            </div>
            <div class="grid-item smal">
            1D + 9U  + 6C	
            </div>
            <div class="grid-item grande">
                <select class="slc" alt="600 + 10 + 9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($suma); $i++) { 
                            echo "<option value='$suma[$i]'>$suma[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item smal">
            <select class="slc" alt="619">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item grande">
            <select class="slc" alt="Seiscientos diecinueve">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item smal">
                1U  + 9C + 6D	
            </div>
            <div class="grid-item grande">
            <select class="slc" alt="900 + 60 + 1">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($suma); $i++) { 
                            echo "<option value='$suma[$i]'>$suma[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item smal">
                <select class="slc" alt="961">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item grande">
            <select class="slc" alt="Novecientos sesenta y uno">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item smal">
            7C + 2D + 8U	
            </div>
            <div class="grid-item grande">
                <select class="slc" alt="700 + 20 + 8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($suma); $i++) { 
                            echo "<option value='$suma[$i]'>$suma[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item smal">
            <select class="slc" alt="728">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item grande">
            <select class="slc" alt="Setecientos veintiocho">
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