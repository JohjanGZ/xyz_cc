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
            <div class="columna">
                <div class="grid-item">
                    <div class="fl"></div>
                    <span class="mr">468</span>
                </div>
            </div>
            <div class="columna">
                <div class="grid-item">
                    <img src="img/20/uno.png" alt="" class="img">
                    <select id="slc1" class="ml">
                        <option value="" disabled selected></option>
                        <?php for ($i=340; $i < 350; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="columna">
                <div class="grid-item">
                    <img src="img/20/dos.png" alt="" class="img">
                    <select id="slc2">
                        <option value="" disabled selected></option>
                        <?php for ($i=328; $i < 335; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="columna">
                <div class="grid-item">
                    <img src="img/20/tres.png" alt="" class="img">
                    <select id="slc3">
                        <option value="" disabled selected></option>
                        <?php for ($i=217; $i < 225; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="columna">
                <div class="grid-item">
                    <img src="img/20/cuatro.png" alt="" class="img">
                    <select id="slc4">
                        <option value="" disabled selected></option>
                        <?php for ($i=196; $i < 203; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                        <?php } ?>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        // console.log(r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>