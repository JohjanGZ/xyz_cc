<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('10000','5000','1000','9000','8000','60000','15000','100','500','900','400','60','70','50','0','8','7','2','6','4') ?>

<body>

    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item w clr">35 076</div>
            <div class="grid-item"><span class="text">30 000 <span class="s">+</span> 5 000 <span class="s">+</span> 70
                    <span class="s">+</span> 6</span></div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item w clr">19 568	</div>
                <div class="grid-item">
                    <select class="slc" alt="10000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 21; $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="500">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="60">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">65 972</div>
                <div class="grid-item">
                    <select class="slc" alt="60000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 21; $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="900">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="70">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">19 452</div>
                <div class="grid-item">
                    <select class="slc" alt="10000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="400">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="50">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">65 906</div>
                <div class="grid-item">
                    <select class="slc" alt="60000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5000">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="900">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
                                echo "<option value='$num[$i]'>$num[$i]</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($num); $i++) { 
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
function result_tipo_3_2_4() {
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