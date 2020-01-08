<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $tablero = array('Centenas', 'Decenas', 'Unidades') ?>

<body>

    <div class="container-two">
        <div class="grid-cabecera">
            <div class="grid-item clr">Tengo</div>
            <div class="grid-item clr">Compro</div>
            <div class="grid-item clr">Me queda</div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/1.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/4.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="20">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                if ($i == 1) {
                                    echo "<option value='$i'>S/ $i </option>";
                                } else {
                                    echo "<option value='$i'>S/ $i </option>";
                                }
                                
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/2.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/5.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                             for ($i=1; $i < 101; $i++) { 
                                if ($i == 1) {
                                    echo "<option value='$i'>S/ $i </option>";
                                } else {
                                    echo "<option value='$i'>S/ $i </option>";
                                }
                                
                            }
                        ?>
                    </select>
                </div>
            </div>

            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/3.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/6.png" class="img materialboxed"></div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                             for ($i=1; $i < 101; $i++) { 
                                if ($i == 1) {
                                    echo "<option value='$i'>S/ $i </option>";
                                } else {
                                    echo "<option value='$i'>S/ $i </option>";
                                }
                                
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_5_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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