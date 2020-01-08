<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-13/index.php

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/1.png" class="img">
                    <select id="slc1">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/2.png" class="img">
                    <select id="slc2">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/3.png" class="img">
                    <select id="slc3">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/4.png" class="img">
                    <select id="slc4">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
=======
<div class="container-two">
    <div class="row">
        <div class="col s12 l6">
            <img src="<?=$dir?>/img/principal.png" class="principal">
        </div>
        <div class="col s12 l6">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li>
                        <img src="<?=$dir?>/img/principal1.png" class="img">
                        <div class="option">
                            <div class="opt">
                                <div class="a" alt=""></div>
                                <img src="<?=$dir?>/img/1.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt="n"></div>
                                <img src="<?=$dir?>/img/2.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt="n"></div>
                                <img src="<?=$dir?>/img/3.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt=""></div>
                                Ninguna
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?=$dir?>/img/principal2.png" class="img">
                        <div class="option">
                            <div class="opt">
                                <div class="a" alt=""></div>
                                <img src="<?=$dir?>/img/1.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt="n"></div>
                                <img src="<?=$dir?>/img/2.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt=""></div>
                                <img src="<?=$dir?>/img/3.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt=""></div>
                                Ninguna
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?=$dir?>/img/principal3.png" class="img">
                        <div class="option">
                            <div class="opt">
                                <div class="a" alt=""></div>
                                <img src="<?=$dir?>/img/1.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt="n"></div>
                                <img src="<?=$dir?>/img/2.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt=""></div>
                                <img src="<?=$dir?>/img/3.png" class="opt-img">
                            </div>
                            <div class="opt">
                                <div class="a" alt=""></div>
                                Ninguna
                            </div>
                        </div>
                    </li>
                </ul>
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-14/index.php
            </div>
        </div>

    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="<?= $dir ?>/img/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-13/index.php
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_13() {
=======
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_3_14() {
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-14/index.php
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>