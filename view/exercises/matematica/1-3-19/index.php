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
        <center>
            <img src="<?=$dir?>/img/principal.png" class="principal">
        </center>
        <div class="grid-container">
            <div class="grid-item"><span class="tn"></span></div>
            <div class="grid-item"><span class="tc"></span><img src="<?=$dir?>/img/1.png" class="img"></div>
            <div class="grid-item"><span class="tc"></span><img src="<?=$dir?>/img/2.png" class="img"></div>
            <div class="grid-item"><span class="tc"></span><img src="<?=$dir?>/img/2.png" class="img"></div>
            <div class="grid-item"><span class="tc"></span><img src="<?=$dir?>/img/2.png" class="img"></div>
            <div class="grid-item">Número Cantidad</div>
            <div class="grid-item">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_3_9() {
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