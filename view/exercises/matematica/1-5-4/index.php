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
        <div class="grid-cabecera">
            <div class="grid-item clr"></div>
            <div class="grid-item clr w c">C</div>
            <div class="grid-item clr w d">D</div>
            <div class="grid-item clr w u">U</div>
            <div class="grid-item clr"></div>

            <div class="grid-item">
                <div class="grid-img"><img src="<?=$dir?>/img/1.png" class="img"></div>
            </div>
            <div class="grid-item w">1</div>
            <div class="grid-item w">0</div>
            <div class="grid-item w">0</div>
            <div class="grid-item">Cien</div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/2.png" class="img"></div>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Cuatrocientos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($centenas); $i++) { 
                                echo "<option value='$centenas[$i]'>$centenas[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/3.png" class="img"></div>
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
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Seiscientos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($centenas); $i++) { 
                                echo "<option value='$centenas[$i]'>$centenas[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/4.png" class="img"></div>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Doscientos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($centenas); $i++) { 
                                echo "<option value='$centenas[$i]'>$centenas[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/5.png" class="img"></div>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Setecientos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($centenas); $i++) { 
                                echo "<option value='$centenas[$i]'>$centenas[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item">
                    <div class="grid-img"><img src="<?=$dir?>/img/6.png" class="img"></div>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item w">
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 101; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="Ochocientos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($centenas); $i++) { 
                                echo "<option value='$centenas[$i]'>$centenas[$i]</option>";
                            }
                        ?>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_5_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 20) {
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