<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $signos = array('<','>','='); ?>

<body>
    <div class="container-two">
        <div class="grid-container">
            <div class="grid-item">
                40
                <div class="campo">
                    <select class="slc" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                47
            </div>
            <div class="grid-item">
                67
                <div class="campo">
                    <select class="slc" alt="=">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                67
            </div>
            <div class="grid-item">
                75
                <div class="campo">
                    <select class="slc" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                54
            </div>
            <div class="grid-item">
                35
                <div class="campo">
                    <select class="slc" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                37
            </div>
            <div class="grid-item">
                25
                <div class="campo">
                    <select class="slc" alt="=">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                25
            </div>
            <div class="grid-item">
                30
                <div class="campo">
                    <select class="slc" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                50
            </div>
            <div class="grid-item">
                90
                <div class="campo">
                    <select class="slc" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                98
            </div>
            <div class="grid-item">
                67
                <div class="campo">
                    <select class="slc" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                65
            </div>
            <div class="grid-item">
                45
                <div class="campo">
                    <select class="slc" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                39
            </div>
            <div class="grid-item">
                76
                <div class="campo">
                    <select class="slc" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                45
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_3_12() {
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