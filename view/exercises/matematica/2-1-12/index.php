<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numbers = array('IIIIIIII','10','IIIIIIIIII','4', '15', '43', 'IIIIIIIIIIIIIIII', '8',); ?>
<body>
    <div class="container-two">
        <div class="columnaUno">
            <div class="">
                <img src="<?= $dir ?>/img/titulo.gif" alt="">
            </div>
            <div class="">
                <img src="<?= $dir ?>/img/imagen.gif" alt="">
            </div>
        </div>
        <div class="columnaDos grid-container">
            <div class="grid-item">
                <h6>Material</h6>
            </div>
            <div class="grid-item">
                <h6>Conteo</h6>
            </div>
            <div class="grid-item">
                <h6>Cantidad</h6>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/botella.gif" alt="">
            </div>
            <div class="grid-item">
                <select class="slc" alt="IIIIIIIIII">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="10">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/leche.gif" alt="">
            </div>
            <div class="grid-item">
                <select class="slc" alt="IIIIIIIIIIIIIIII">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="15">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/vidrio.gif" alt="">
            </div>
            <div class="grid-item">
                <select class="slc" alt="IIIIIIII">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/lata.gif" alt="">
            </div>
            <div class="grid-item">
                <select class="slc" alt="IIIIIIIIII">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="10">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div></div>
            <div></div>
            <div class="grid-item ultimo">
                <select class="slc ulti" alt="43">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
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
function result_tipo_2_1_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
        console.log("otros: ", otros, "y r: ", r);
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log("otros: ", otros, "y r: ", r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>