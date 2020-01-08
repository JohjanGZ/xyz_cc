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
        <div class="grid-container">
            <div class="grid-item tt"><span></span>Número</div>
            <div class="grid-item tt"><span></span>Descomposición</div>
            <div class="grid-item tc">
                69
            </div>
            <div class="grid-item">
                6D
                <span>+</span>
                9U
            </div>

            <div class="grid-item tc">
                96
            </div>
            <div class="grid-item">
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="6">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                89
            </div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                49
            </div>
            <div class="grid-item">
                <select class="slc" alt="4">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="grid-item tc">
                87
            </div>
            <div class="grid-item">
                <select class="slc" alt="8">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."D</option>";
                        }
                    ?>
                </select>
                <span>+</span>
                <select class="slc" alt="7">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=1; $i < 101; $i++) { 
                            echo "<option value='$i'>$i"."U</option>";
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_3_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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