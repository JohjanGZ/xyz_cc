<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('18','14','10','12','11'); ?>

<body>
    <div class="container-two">
<<<<<<< HEAD:view/exercises/matematica/1-1-20/index.php
        <div class="grid-tabla">
            <div class="grid-container">
                <img src="<?=$dir?>/img/1.png" class="img">
                <div class="f1">
                    <select class="seleccion" alt="10">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <img src="<?=$dir?>/img/2.png" class="img">
                <div class="f2">
                    <select class="seleccion" alt="11">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
=======
        <div class="row">
            <div class="col s4 l4">
                <div class="grid-container">
                    <?php for ($i=1; $i < 19; $i++) { ?>
                        <div class="grid-item">
                            <div class="caja" alt="n"><img src="<?= $dir ?>/img/1.png" class="img"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col s4 l4">
                <div class="grid-container">
                    <?php for ($i=1; $i < 19; $i++) { ?>
                        <div class="grid-item">
                            <div class="caja" alt="n"><img src="<?= $dir ?>/img/2.png" class="img"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col s4 l4">
                <div class="grid-container">
                    <?php for ($i=1; $i < 19; $i++) { ?>
                        <div class="grid-item">
                            <div class="caja" alt="n"><img src="<?= $dir ?>/img/3.png" class="img"></div>
                        </div>
                    <?php } ?>
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/reserva1-1-17/index.php
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
<<<<<<< HEAD:view/exercises/matematica/1-1-20/index.php
function result_tipo_1_1_20() {
=======
function result_tipo_1_1_17() {
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/reserva1-1-17/index.php
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
<<<<<<< HEAD:view/exercises/matematica/1-1-20/index.php
    r = 0;
    seleccion_lista();
    if (r == 2) {
=======

    if (r == 30) {
>>>>>>> a62b8f102345509f10fe5fa0dc2b4abe60cd7fd7:view/exercises/matematica/reserva1-1-17/index.php
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