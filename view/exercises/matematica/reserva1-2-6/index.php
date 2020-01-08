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
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-6/index.php
            <p class="pregunta"><span class='ftitulo'>a.</span> Mateo tiene un tren con 5 vagones y le regalaron 7 vagones más. ¿Cuántos vagones tiene ahora?</p>
            <div class="grid-item"><img src="<?=$dir?>/img/1.png" class="img">
                <div class="campo bo">
                    <select id="slc1">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">+</span>
                    <select id="slc2">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                    <span class="mg">=</span>
                    <select id="slc3">
                        <option value="" disabled selected></option>
                        <?php for ($i=1; $i < 41; $i++) { ?><option value="<?= $i ?>"><?= $i ?></option><?php } ?>
                    </select>
                </div>
            </div>
=======
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Descomposición</div>
            <div class="grid-item tc">
                69
            </div>
            <div class="grid-item">
                6D
                <span>+</span>
                9U
            </div>

            <div class="grid-item tc">
                96
            </div>
            <div class="grid-item">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                89
            </div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                49
            </div>
            <div class="grid-item">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                87
            </div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-6/index.php
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

<<<<<<< HEAD:view/exercises/matematica/reserva1-2-6/index.php
    if (r == 3) {
=======
    if (r == 8) {
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-6/index.php
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