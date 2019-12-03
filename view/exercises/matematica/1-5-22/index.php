<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $centenas = array('Cien', 'Doscientos', 'Trescientos', 'Cuatrocientos', 'Quinientos', 'Seiscientos', 'Setecientos', 'Ochocientos', 'Novecientos') ?>

<body>

    <div class="container-two">
        <center>
            <p class="p"><span class='ftitulo'>b.</span> Guillermo llena el depósito de agua para regar el jardín. Por
                la mañana hecha 346 cubos de agua. Por la tarde hecha 453 cubos. ¿Cuántos cubos hecha al día?
            </p>
        </center>
        <div class="grid-cabecera">
            <div class="grid-item clr"></div>
            <div class="grid-item clr w c">C</div>
            <div class="grid-item clr w d">D</div>
            <div class="grid-item clr w u">U</div>
            <div class="grid-item clr w"></div>

            <div class="grid-item clr co">Por la mañana<span class="fle">→</span></div>
            <div class="grid-item w">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <option value="0">-</option>
                    <option value="1">+</option>
                    <option value="2">x</option>
                    <option value="3">/</option>
                </select>
            </div>

            <div class="grid-item clr cr">Por la tarde<span class="fle">→</span></div>
            <div class="grid-item w bb">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w bb">
                <select class="slc" alt="5">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w bb">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w"></div>

            <div class="grid-item clr"></div>
            <div class="grid-item w">
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w"></div>
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
function result_tipo_1_5_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 10) {
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