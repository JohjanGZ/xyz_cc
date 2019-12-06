<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numbers = array('A','V','D','I'); ?>
<body>
    <div class="container-two">
        <div class="row column columnUno">
            <div class="col s10">
                <img id="imagePrincipal" src="img/2-1-6/image.png" alt="">
            </div>
        </div>
        <div class="column grid-container">
            <div class="grid-item">
                <select class="slc" alt="V">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="I">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="D">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="A">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numbers); $i++) { 
                            echo "<option value='$numbers[$i]'>$numbers[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item one">
                <h4>(2;3)</h4>
            </div>
            <div class="grid-item two">
                <h4>(3;6)</h4>
            </div>
            <div class="grid-item one">
                <h4>(6;5)</h4>
            </div>
            <div class="grid-item two">
                <h4>(5;2)</h4>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="img/2-1-6/respuesta.png">
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
function result_tipo_2_1_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4 && otros == 0) {
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