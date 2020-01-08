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
            <center>
                <p class="pregunta"><span class='ftitulo'>b.</span> Camila plantó en su jardín 11 rosas, su mamá le dió
                    5
                    más. ¿Cuántas rosas tiene ahora en su jardín?</p>
            </center>
            <div class="grid-item"><img src="<?=$dir?>/img/2.png" class="img">
                <div class="campo">
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-7/index.php
                    <select id="slc4">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">+</span>
                    <select id="slc5">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">=</span>
                    <select id="slc6">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
=======
                    <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                    <select class="slc" alt="41">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                    <select class="slc" alt="36">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/3.png" class="img materialboxed">
                    <select class="slc" alt="28">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/4.png" class="img materialboxed">
                    <select class="slc" alt="34">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/5.png" class="img materialboxed">
                    <select class="slc" alt="52">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-item">
                <div class="campo">
                    <img src="<?=$dir?>/img/6.png" class="img materialboxed">
                    <select class="slc" alt="17">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-4/index.php
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

<<<<<<< HEAD:view/exercises/matematica/reserva1-2-7/index.php
    if (r == 3) {
=======
    if (r == 6) {
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-4/index.php
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