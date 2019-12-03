<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $numero = array('Doscientos trece','Doscientos séis','Doscientos treinta','Doscientos ocho','Doscientos cuarenta') ?>
<body>

    <div class="container-two">
        <div class="grid-options">
            <!-- 213 -->
            <div class="grid-option">
                2<span class="c">C</span>, 1<span class="d">D</span>&nbsp;y 3<span class="u">U</span>
                <span class="fle">-></span>
                <select class="slc" alt="213">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 401; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">=</span>
                <select class="slc" alt="<?=$numero[0]?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 206 -->
            <div class="grid-option">
                2<span class="c">C</span>&nbsp;y 6<span class="u">U</span>
                <span class="fle">-></span>
                <select class="slc" alt="206">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 401; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">=</span>
                <select class="slc" alt="<?=$numero[1]?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 230 -->
            <div class="grid-option">
                2<span class="c">C</span>&nbsp;y 3<span class="d">D</span>
                <span class="fle">-></span>
                <select class="slc" alt="230">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 401; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">=</span>
                <select class="slc" alt="<?=$numero[2]?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 208 -->
            <div class="grid-option">
                2<span class="c">C</span>&nbsp;y 8<span class="u">U</span>
                <span class="fle">-></span>
                <select class="slc" alt="208">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 401; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">=</span>
                <select class="slc" alt="<?=$numero[3]?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <!-- 240 -->
            <div class="grid-option">
                2<span class="c">C</span>&nbsp;y 4<span class="d">D</span>
                <span class="fle">-></span>
                <select class="slc" alt="240">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < 401; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <span class="ms">=</span>
                <select class="slc" alt="<?=$numero[4]?>">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($numero); $i++) { 
                            echo "<option value='$numero[$i]'>$numero[$i]</option>";
                        }
                    ?>
                </select>
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
function result_tipo_1_5_20() {
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