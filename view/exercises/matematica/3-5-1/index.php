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
                35 270
                <div class="campo">
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                96 142
            </div>
            <div class="grid-item">
                51 687
                <div class="campo">
                    <select class="seleccion" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                12 743
            </div>
            <div class="grid-item">
                30 120
                <div class="campo">
                    <select class="seleccion" alt="=">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                30 120
            </div>
            <div class="grid-item">
                54 712
                <div class="campo">
                    <select class="seleccion" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                51 172
            </div>
            <div class="grid-item">
                51 635
                <div class="campo">
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                87 327
            </div>

            <div class="grid-item">
                51 040
                <div class="campo">
                    <select class="seleccion" alt="=">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                51 040
            </div>
            <div class="grid-item">
                52 614
                <div class="campo">
                    <select class="seleccion" alt="<">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                95 241
            </div>
            <div class="grid-item">
                63 174
                <div class="campo">
                    <select class="seleccion" alt=">">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($signos); $i++) { 
                                echo "<option value='$signos[$i]'>$signos[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                35 721
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
function result_tipo_3_5_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r=0;
    seleccion_lista();
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