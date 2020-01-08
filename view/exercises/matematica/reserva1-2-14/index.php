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
        <div class="caja">
            <div class="tabla">
                <div class="grid-container">
                    <div class="grid-item">
                        7
                        <select id="slc1">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        9
                    </div>
                    <div class="grid-item">
                        10
                        <select id="slc2">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        12
                    </div>
                    <div class="grid-item">
                        4
                        <select id="slc3">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        6
                    </div>
                    <div class="grid-item">
                        18
                        <select id="slc4">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        20
                    </div>
                    <div class="grid-item">
                        25
                        <select id="slc5">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        27
                    </div>
                    <div class="grid-item">
                        35
                        <select id="slc6">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        37
                    </div>
                    <div class="grid-item">
                        46
                        <select id="slc7">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        48
                    </div>
                    <div class="grid-item">
                        20
                        <select id="slc8">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        22
                    </div>
                    <div class="grid-item">
                        14
                        <select id="slc9">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        16
                    </div>
                    <div class="grid-item">
                        31
                        <select id="slc10">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        33
                    </div>
                    <div class="grid-item">
                        43
                        <select id="slc11">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        45
                    </div>
                    <div class="grid-item">
                        44
                        <select id="slc12">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        46
                    </div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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