<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $nom = array('mariposas','colibries', 'truchas', 'suches') ?>

<body>
    <div class="container-two">
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="img materialboxed">
            <span class="text"><span class="num">●</span>Si Alfredo atrapa un animalito volador, es más probable que sea un colibrí o una mariposa.</span>
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before"><span class="num">1.</span>Observación: Hay</span>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <span class="span-after">colibries y</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <span class="span-after">mariposas.</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before"><span class="num">2.</span>Observación: Hay más </span>
                    <select class="slc" alt="<?= $nom[0] ?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($nom); $i++) { 
                                echo "<option value='$nom[$i]'>$nom[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="span-after">y menos</span>
                    <select class="slc" alt="<?= $nom[1] ?>">
                        <option value="" disabled selected></option>
                        <?php
                           for ($i=0; $i < count($nom); $i++) { 
                            echo "<option value='$nom[$i]'>$nom[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="span-after">.</span>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_9_21() {
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
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>|