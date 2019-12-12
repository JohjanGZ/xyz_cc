<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('8000','3000','1000','5000','7000','6000','400','900','100','200','600','300','800','80','20','30','40','60','50','10','2','1','5','8','4') ?>
<body>

    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item w um">UM</div>
            <div class="grid-item w c">C</div>
            <div class="grid-item w d">D</div>
            <div class="grid-item w u">U</div>
            <div class="grid-item clr">Lectura numérica</div>

            <div class="grid-item w">1</div>
            <div class="grid-item w">7</div>
            <div class="grid-item w">5</div>
            <div class="grid-item w">9</div>
            <div class="grid-item"><span class="text">1 000 <span class="s">+</span> 700 <span class="s">+</span> 50 <span class="s">+</span> 9</span></div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item w">3</div>
                <div class="grid-item w">4</div>
                <div class="grid-item w">8</div>
                <div class="grid-item w">2</div>
                <div class="grid-item">
                    <select class="slc" alt="3000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="400">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < 21; $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="80">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">7</div>
                <div class="grid-item w">9</div>
                <div class="grid-item w">3</div>
                <div class="grid-item w">5</div>
                <div class="grid-item">
                    <select class="slc" alt="7000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="900">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="30">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">5</div>
                <div class="grid-item w">3</div>
                <div class="grid-item w">6</div>
                <div class="grid-item w">8</div>
                <div class="grid-item">
                    <select class="slc" alt="5000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="300">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="60">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w">6</div>
                <div class="grid-item w">8</div>
                <div class="grid-item w">1</div>
                <div class="grid-item w">5</div>
                <div class="grid-item">
                    <select class="slc" alt="6000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="800">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="10">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=1; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
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
function result_tipo_3_1_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 16) {
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