<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $result = array('0','1','2','3','4','5','6','7','8','9');
?>
<body>

    <div class="container-two">
        <h5>a. 4 357 – 2 243</h5>
        <div class="item">
            <div class="grid-head">
                <div class="grid-item w um">UM</div>
                <div class="grid-item w c">C</div>
                <div class="grid-item w d">D</div>
                <div class="grid-item w u">U</div>
                <div class="grid-item w sb"></div>
            </div>
            <div class="grid-container">
                <div class="grid-caja">
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="4">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="3">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="5">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="7">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w sb rojo">-</div>
                </div>
                <div class="grid-caja">
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="2">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="2">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="4">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="3">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w sb"></div>
                </div>
                <hr>
                <div class="grid-caja">
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="2">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="1">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="1">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w">
                        <select class="slc seleccion" id="slc2" alt="4">
                            <option value="" disabled selected></option>
                            <?php foreach($result as $n) : ?>
                            <option value="<?= $n ?>"><?= $n ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="grid-item w sb"></div>
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
function result_tipo_2_7_28() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>