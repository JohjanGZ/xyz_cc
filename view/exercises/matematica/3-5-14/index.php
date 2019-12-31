<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $escritura = array('Dos cuartos','Cuatro quintos','Un tercio','Dos novenos','Cinco séptimos','Seis octavos','Un cuarto','Tres décimos'); ?>

<body>
    <div class="container-two">
        <div class="grid-tabla">
            <div class="grid-container">
                <div class="grid-item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Dos cuartos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/2.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Un tercio">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/3.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Cinco séptimos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/4.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Un cuarto">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-item">
                    <img src="<?=$dir?>/img/5.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Cuatro quintos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/6.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Dos novenos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/7.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Seis octavos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($escritura); $i++) { 
                            echo "<option value='$escritura[$i]'>$escritura[$i]</option>";
                        }
                    ?>
                    </select>
                </div>

                <div class="grid-item">
                    <img src="<?=$dir?>/img/8.png" class="img">
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Tres décimos">
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
function result_tipo_3_5_14() {
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