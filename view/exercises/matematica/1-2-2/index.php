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
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="img">
                <div class="box-select">
                    <select id="select1">
                        <option value="" disabled selected>Unidades</option>
                        <?php for ($i=1; $i <= 10; $i++) { ?>
                        <?php if ($i == 1) { ?>
                        <option value="<?=$i?>"><?= $i?> unidad</option>
                        <?php } else { ?>
                        <option value="<?=$i?>"><?= $i?> unidades</option>
                        <?php } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="img">
                <div class="box-select">
                    <div class="box-igual">
                        <select id="select2">
                            <option value="" disabled selected>Decenas</option>
                            <?php for ($i=1; $i <= 10; $i++) { ?>
                            <?php if ($i == 1) { ?>
                            <option value="<?=$i?>"><?= $i?> decena</option>
                            <?php } else { ?>
                            <option value="<?=$i?>"><?= $i?> decenas</option>
                            <?php } ?>
                            <?php } ?>
                        </select>
                    </div>
                    <span class="after">=</span>
                    <div class="box-igual">
                        <select id="select3">
                            <option value="" disabled selected>Unidades</option>
                            <?php for ($i=1; $i <= 10; $i++) { ?>
                            <?php if ($i == 1) { ?>
                            <option value="<?=$i?>"><?= $i?> unidad</option>
                            <?php } else { ?>
                            <option value="<?=$i?>"><?= $i?> unidades</option>
                            <?php } ?>
                            <?php } ?>
                        </select>
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
function result_tipo_1_2_2() {
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
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>