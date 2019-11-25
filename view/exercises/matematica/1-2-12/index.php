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
        <center>
            <p class="pregunta"><span class='ftitulo'>d.</span> En el estuche de Marita hay 24 crayolas y 15 plumones.
                ¿Cuántos útiles escolares tiene en total?</p>
        </center>
        <div class="caja">

            <div class="tabla">
                <div class="grid-container">
                    <div class="grid-item cabe"><span>Número</span></div>
                    <div class="grid-item cabe"><span>Descomposición aditiva</span></div>
                    <div class="grid-item cabe"><span>Valor posicional</span></div>
                    <div class="grid-item cabe"><span>Se escribe</span></div>
                    <!-- 1 -->
                    <div class="grid-item">
                        24
                    </div>
                    <div class="grid-item">
                        <select id="slc1">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        +
                        <select id="slc2">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select id="slc3">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>D</option><?php } ?>
                        </select>
                        +
                        <select id="slc4">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>U</option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        veinticuatro
                    </div>
                    <!-- 2 -->
                    <div class="grid-item">
                        <select id="slc5">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        30 + 6
                    </div>
                    <div class="grid-item">
                        <select id="slc6">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>D</option><?php } ?>
                        </select>
                        +
                        <select id="slc7">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>U</option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        treinta y seis
                    </div>
                    <!-- 3 -->
                    <div class="grid-item">
                        <select id="slc8">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        <select id="slc9">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                        +
                        <select id="slc10">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        4D + 7U
                    </div>
                    <div class="grid-item">
                        cuarenta y siete
                    </div>
                    <!-- 4 -->
                    <div class="grid-item">
                        <select id="slc11">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        10 + 5
                    </div>
                    <div class="grid-item">
                        <select id="slc12">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>D</option><?php } ?>
                        </select>
                        +
                        <select id="slc13">
                            <option value="" disabled selected></option>
                            <?php for ($i=1; $i < 101; $i++) { ?><option value="<?= $i ?>"><?= $i ?>U</option><?php } ?>
                        </select>
                    </div>
                    <div class="grid-item">
                        quince
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 13) {
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