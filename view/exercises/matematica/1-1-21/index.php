<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('18','14','10','7','11'); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="s">=</span>
                </div>
                <div class="item w">
                    1
                    <span class="s">+</span>
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="s">=</span>
                </div>
                <div class="item w">
                    2
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <span class="s">=</span>
                </div>
                <div class="item w">
                    4
                </div>
            </div>
            <div class="grid-item">
                <div class="item">
                   
                </div>
                <div class="item">
                    <span class="s">=</span>
                    <select class="seleccion" alt="7">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_1_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 1) {
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