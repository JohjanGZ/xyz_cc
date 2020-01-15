<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('<','>','=') ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-ejercicio">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/principal1.png" class="principal">
                </div>
                <div class="grid-resp">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <select class="seleccion" alt="=">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <img src="<?=$dir?>/img/2.png" class="img">
                </div>
            </div>
            
            <div class="grid-ejercicio">
                <div class="grid-img">
                    <img src="<?=$dir?>/img/principal2.png" class="principal">
                </div>
                <div class="grid-resp">
                    <img src="<?=$dir?>/img/3.png" class="img">
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                    <img src="<?=$dir?>/img/4.png" class="img">
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
function result_tipo_3_4_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r=0;
    seleccion_lista();
    if (r == 2) {
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