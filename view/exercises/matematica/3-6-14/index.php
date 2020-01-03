<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('74,05','75,10','78,62','90,09','88,21','89,12','17,23','19,89','18,62','36,98','33,01','30,12') ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-resp">
                <span class="mg">a.</span>
                75,28
                <span class="mg"><</span>
                <select class="seleccion" alt="78,62">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 3; $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-resp">
                <span class="mg">b.</span>
                89,25
                <span class="mg"><</span>
                <select class="seleccion" alt="90,09">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=3; $i < 6; $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-resp">
                <span class="mg">c.</span>
                19,09
                <span class="mg"><</span>
                <select class="seleccion" alt="19,89">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=6; $i < 9; $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-resp">
                <span class="mg">d.</span>
                34,04
                <span class="mg"><</span>
                <select class="seleccion" alt="36,98">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=9; $i < 12; $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
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
function result_tipo_3_6_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    // console.log(r);
    if (r == 4) {
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