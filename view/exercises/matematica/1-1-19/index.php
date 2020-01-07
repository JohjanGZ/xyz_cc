<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('13','14','15','12','18'); ?>
<body>
    <div class="container-two">
        <div class="grid-tabla">
            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">6</div>

                    <div class="grid-item">7</div>
                </div>
                <div class="grid-item">
                    6<span class="s">+</span>7<span class="s">=</span>
                    <select class="seleccion" alt="13">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">5</div>

                    <div class="grid-item">9</div>
                </div>
                <div class="grid-item">
                    5<span class="s">+</span>9<span class="s">=</span>
                    <select class="seleccion" alt="14">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">8</div>

                    <div class="grid-item">7</div>
                </div>
                <div class="grid-item">
                    8<span class="s">+</span>7<span class="s">=</span>
                    <select class="seleccion" alt="15">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">4</div>

                    <div class="grid-item">8</div>
                </div>
                <div class="grid-item">
                    4<span class="s">+</span>8<span class="s">=</span>
                    <select class="seleccion" alt="12">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">9</div>

                    <div class="grid-item">9</div>
                </div>
                <div class="grid-item">
                    9<span class="s">+</span>9<span class="s">=</span>
                    <select class="seleccion" alt="18">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($signos); $i++) { ?>
                        <option value="<?= $signos[$i]?>"><?= $signos[$i]?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="grid-container">
                <div class="grid-num bb">
                    <span class="ms">+</span>
                    <div class="grid-item">6</div>

                    <div class="grid-item">8</div>
                </div>
                <div class="grid-item">
                    6<span class="s">+</span>8<span class="s">=</span>
                    <select class="seleccion" alt="14">
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
function result_tipo_1_1_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 6) {
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