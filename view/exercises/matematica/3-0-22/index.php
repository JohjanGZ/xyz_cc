<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$comprension = array('1←','1→','1↑','1↓','2←','2→','2↑','2↓','3←','3→','3↑','3↓','4←','4→','4↑','4↓','5←','5→','5↑','5↓','6←','6→','6↑','6↓');
// 27← 26→ 24↑ 25↓
?>

<body>
    <div class="container-two">
        <center>
            <img src="<?=$dir?>/img/principal.png" class="img materialboxed">
        </center>
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item">
                    <select class="slc" alt="4→">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="3↓">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="2→">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="3↓">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="5→">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="4↑">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="6→">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="5↓">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="5←">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="1↓">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item">
                    <select class="slc" alt="6→">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
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
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
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
function result_tipo_3_0_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 11) {
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