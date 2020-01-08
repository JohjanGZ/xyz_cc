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
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-24/index.php
        <center>
            <img src="<?=$dir?>/img/principal.png" class="principal">
        </center>
        <div class="row">
            <div class="campo" id="palabras">
                <ul id="listA">
                    <li id="obj1">
                        <center>
                            <p><span class='ftitulo'>b.</span> El objeto que tiene menos elementos es:</p>
                        </center>
                        <div class="opciones">
                            <div class="op">
                                <div class="box a"></div>
                                <img src="<?=$dir?>/img/1.png" class="img">
                            </div>
                            <div class="op">
                                <div class="box a" alt="n"></div>
                                <img src="<?=$dir?>/img/2.png" class="img">
                            </div>
                            <div class="op">
                                <div class="box a"></div>
                                <img src="<?=$dir?>/img/3.png" class="img">
                            </div>
                            <div class="op">
                                <div class="box a"></div>
                                <img src="<?=$dir?>/img/4.png" class="img">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
=======
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Descomposición</div>
            <div class="grid-item tc">
                15
            </div>
            <div class="grid-item">
                10
                <span>+</span>
                5
            </div>

            <div class="grid-item tc">
                96
            </div>
            <div class="grid-item">
                <select class="slc" alt="90">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                89
            </div>
            <div class="grid-item">
                <select class="slc" alt="80">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                49
            </div>
            <div class="grid-item">
                <select class="slc" alt="40">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                87
            </div>
            <div class="grid-item">
                <select class="slc" alt="80">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-5/index.php
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_2_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

<<<<<<< HEAD:view/exercises/matematica/reserva1-2-24/index.php
    if (r == 1) {
=======
    if (r == 8) {
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-3-5/index.php
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