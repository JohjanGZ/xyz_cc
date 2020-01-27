<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $letras = array('8','7','9','4','2','1','5','6','0');
?>
<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item"><span class="tn">Número</span></div>
            <div class="grid-item"><span class="tc">Notación desarrollada</span></div>
            <div class="grid-item">6 295</div>
            <div class="grid-item">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                decenas
            </div>
            <div class="grid-item">5 308</div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                unidades
            </div>
            <div class="grid-item">4 150</div>
            <div class="grid-item">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                unidades de millar
            </div>
            <div class="grid-item">2 507</div>
            <div class="grid-item">
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                unidades
            </div>
            <div class="grid-item">9 075</div>
            <div class="grid-item">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                unidades de millar
            </div>
            <div class="grid-item">5 628</div>
            <div class="grid-item">
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($letras); $i++) { 
                            echo "<option value='$letras[$i]'>$letras[$i]</option>";
                        }
                    ?>
                </select>
                unidades de millar
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
function result_tipo_4_1_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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