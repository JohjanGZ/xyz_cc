<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('0,12','100','9','0,09','12','0,2','0,5','0,4','0,1','20','9','40','7','1');
?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col l4">
                <img src="<?=$dir?>/img/principal.png" class="principal">
            </div>
            <div class="col l8">
                <div class="grid-head">
                    <div class="grid-item-head clr"></div>
                    <div class="grid-item-head clr">Fracción decimal</div>
                    <div class="grid-item-head clr">N.° Decimal</div>
                </div>
                <div class="grid-container">
                    <!-- 1 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            <img src="<?=$dir?>/img/1.png" class="img">
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="40">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                            <div class="ln"></div>
                            <select class="seleccion" alt="100">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="0,4">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            <img src="<?=$dir?>/img/2.png" class="img">
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="20">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                            <div class="ln"></div>
                            <select class="seleccion" alt="100">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="0,2">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="grid-caja">
                        <div class="grid-item">
                            <img src="<?=$dir?>/img/3.png" class="img">
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="12">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                            <div class="ln"></div>
                            <select class="seleccion" alt="100">
                                <option value="" disabled selected></option>
                                <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                            </select>
                        </div>
                        <div class="grid-item">
                            <select class="seleccion" alt="0,12">
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
function result_tipo_3_6_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r=0;
    seleccion_lista();
    if (r == 9) {
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