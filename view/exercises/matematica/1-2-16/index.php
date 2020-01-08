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
                <div class="grid-item p0">
                    <div class="campo">
                        <img src="<?=$dir?>/img/1.png" class="img">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">8</div>
                        <div class="bo">
                            <select id="slc1">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">13</div>
                        <div class="bo">
                            <select id="slc2">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">18</div>
                        <div class="bo">
                            <select id="slc3">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columna">
                <div class="grid-item p0">
                    <div class="campo">
                        <img src="<?=$dir?>/img/2.png" class="img">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">8</div>
                        <div class="bo">
                            <select id="slc4">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">7</div>
                        <div class="bo">
                            <select id="slc5">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">9</div>
                        <div class="bo">
                            <select id="slc6">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="columna">
                <div class="grid-item p0">
                    <div class="campo">
                        <img src="<?=$dir?>/img/3.png" class="img">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">5</div>
                        <div class="bo">
                            <select id="slc7">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">10</div>
                        <div class="bo">
                            <select id="slc8">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="campo">
                        <div class="bo w">11</div>
                        <div class="bo">
                            <select id="slc9">
                                <option value="" disabled selected></option>
                                <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option>
                                <?php } ?>
                            </select>
                        </div>
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
function result_tipo_1_2_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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