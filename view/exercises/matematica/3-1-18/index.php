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
        <div class="grid-tabla">
            <!-- 1 -->
            <div class="grid-container">
                <div class="grid-num bb">
                    <div class="grid-item">5</div>
                    <div class="grid-item">3</div>
                    <div class="grid-item">5</div>
                    <div class="grid-item">8<span class="ms">+</span></div>

                    <div class="grid-item">3</div>
                    <div class="grid-item">2</div>
                    <div class="grid-item">7</div>
                    <div class="grid-item">6</div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <!-- 2 -->
            <div class="grid-container">
                <div class="grid-num bb">
                    <div class="grid-item">4</div>
                    <div class="grid-item">2</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">9<span class="ms">+</span></div>

                    <div class="grid-item">3</div>
                    <div class="grid-item">5</div>
                    <div class="grid-item">0</div>
                    <div class="grid-item">4</div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <!-- 3 -->
            <div class="grid-container">
                <div class="grid-num bb">
                    <div class="grid-item">5</div>
                    <div class="grid-item">1</div>
                    <div class="grid-item">3</div>
                    <div class="grid-item">7<span class="ms">+</span></div>

                    <div class="grid-item">3</div>
                    <div class="grid-item">9</div>
                    <div class="grid-item">3</div>
                    <div class="grid-item">7</div>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i</option>";
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
function result_tipo_3_1_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>