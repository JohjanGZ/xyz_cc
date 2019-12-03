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
            <p class="p"><span class='ftitulo'>c.</span> En un huerto hay 287 árboles frutales. 124 de estos árboles son manzanos y el resto son ciruelas. ¿Cuántas ciruelas hay?</p>
        </center>
        <div class="grid-cabecera">
            <div class="grid-item clr"></div>
            <div class="grid-item clr w c">C</div>
            <div class="grid-item clr w d">D</div>
            <div class="grid-item clr w u">U</div>
            <div class="grid-item clr w"></div>

            <div class="grid-item clr co">Árboles<span class="fle">→</span></div>
            <div class="grid-item w">2</div>
            <div class="grid-item w">8</div>
            <div class="grid-item w">7</div>
            <div class="grid-item w">
                <select class="slc" alt="0">
                    <option value="" disabled selected></option>
                    <option value="0">-</option>
                    <option value="1">+</option>
                    <option value="2">x</option>
                    <option value="3">/</option>
                </select>
            </div>

            <div class="grid-item clr cr">Manzanos<span class="fle">→</span></div>
            <div class="grid-item w bb">1</div>
            <div class="grid-item w bb">2</div>
            <div class="grid-item w bb">4</div>
            <div class="grid-item w"></div>

            <div class="grid-item clr"></div>
            <div class="grid-item w">
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            <div class="grid-item w">
                <select class="slc" alt="3">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < 101; $i++) { 
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
function result_tipo_1_5_23() {
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