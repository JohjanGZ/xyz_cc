<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('4','14','8','12','6','1','3','5','2'); ?>

<body>
    <div class="container-two">
        <div class="grid-tabla">
            <div class="grid-container">
                <div class="pregunta">
                    <div class="item">
                        <img src="<?=$dir?>/img/1.png" class="img">
                        <select class="seleccion" alt="3">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < count($signos); $i++) { ?>
                            <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="item">
                        <img src="<?=$dir?>/img/2.png" class="img">
                        <select class="seleccion" alt="2">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < count($signos); $i++) { ?>
                            <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="item">
                        <img src="<?=$dir?>/img/3.png" class="img">
                        <select class="seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php for ($i=0; $i < count($signos); $i++) { ?>
                            <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_1_29() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
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