<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('3:30','8:10','5:40','10:15');
    $letras = array('Las tres','Las diez','Las cinco','Las siete');
?>

<body>
    <div class="container-two">
        <div class="container">
            <div class="item">
                <img src="<?= $dir ?>/img/1.png" alt="">
                <select class="slc" alt="3:30">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/2.png" alt="">
                <select class="slc" alt="8:10">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/3.png" alt="">
                <select class="slc" alt="5:40">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/4.png" alt="">
                <select class="slc" alt="10:15">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/5.png" alt="">
                <select class="slc" alt="Las tres">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/6.png" alt="">
                <select class="slc" alt="Las diez">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/7.png" alt="">
                <select class="slc" alt="Las cinco">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/8.png" alt="">
                <select class="slc" alt="Las siete">
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_1_18() {
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