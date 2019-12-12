<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$extension = array(
    '10;20;25',
    '10;15;25',
    '10;20',
    '3;6;12;18',
    '6;12',
    '6;12;18'
);
?>

<body>
    <div class="container-two">
        <!-- <div class="grid-head">
            <div class="grid-item wc">Por extensión</div>
            <div class="grid-item we">Por comprensión</div>
        </div> -->
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item wc">
                    L<span class="s">={</span>5; 10; 15; 20; 25<span class="s">}</span>
                    <span class="space"></span>
                    E<span class="s">={</span>10; 20<span class="s">}</span>
                </div>
                <div class="grid-item we">
                    <span class="text">L <span class="s-u">∩</span> E</span>
                    <span class="s">={</span>
                    <select class="slc" alt="<?=$extension[2]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                    <span class="s">}</span>
                </div>
            </div>

            <div class="grid-box">
                <div class="grid-item wc">
                    D<span class="s">={</span>3; 6; 9; 12; 15<span class="s">}</span>
                    <span class="space"></span>
                    E<span class="s">={</span>6; 12; 18<span class="s">}</span>
                </div>
                <div class="grid-item we">
                    <span class="text">D <span class="s-u">∩</span> E</span>
                    <span class="s">={</span>
                    <select class="slc" alt="<?=$extension[4]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                    <span class="s">}</span>
                </div>
            </div>

        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
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
function result_tipo_3_0_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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