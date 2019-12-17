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
            <div class="grid-item">
                <span class="text">3<span class="dm">DM</span><span class="s">+</span>
                <span class="text">3<span class="um">UM</span><span class="s">+</span>
                <span class="text">3<span class="d">D</span><span class="s">+</span>
                <span class="text">3<span class="u">U</span>
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-caja">
                <div class="grid-item w clr">19 568</div>
                <div class="grid-item">
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."DM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."UM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."C</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."D</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."U</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">65 972</div>
                <div class="grid-item">
                <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."DM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."UM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."C</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="7">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."D</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."U</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">19 452</div>
                <div class="grid-item">
                <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."DM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."UM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="4">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."C</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."D</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."U</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-caja">
                <div class="grid-item w clr">65 906</div>
                <div class="grid-item">
                <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."DM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."UM</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="9">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."C</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="0">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."D</option>";
                            }
                        ?>
                    </select>
                    <span class="s">+</span>
                    <select class="slc" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < 10; $i++) { 
                                echo "<option value='$i'>$i"."U</option>";
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
function result_tipo_3_2_5() {
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