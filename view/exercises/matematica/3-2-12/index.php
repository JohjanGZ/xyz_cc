<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('637','749','1386','678','597','1275','718','290','1008','170','735','905','479','375','854'); ?>

<body>

    <div class="container-two">
        <div class="grid-container">
            <div class="grid-ejercicio">
                <div class="ejercicio">
                    637 <div class="ms">+</div> 749
                </div>
                <div class="grid-head">
                    <div class="grid-item">
                        <select class="seleccion" alt="637">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="749">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">=</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="749">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="637">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                </div>
                <div class="grid-flechas">
                    <div class="grid-item ms">↘</div>
                    <div class="grid-item ms">↙</div>
                    <div class="grid-item ms">↘</div>
                    <div class="grid-item ms">↙</div>
                </div>
                <div class="grid-respuesta">
                    <div class="grid-item">
                        <select class="seleccion" alt="1386">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">=</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="1386">
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
            <div class="grid-ejercicio">
                <div class="ejercicio">
                    678 <div class="ms">+</div> 597
                </div>
                <div class="grid-head">
                    <div class="grid-item">
                        <select class="seleccion" alt="678">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="597">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">=</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="597">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="678">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                </div>
                <div class="grid-flechas">
                    <div class="grid-item ms">↘</div>
                    <div class="grid-item ms">↙</div>
                    <div class="grid-item ms">↘</div>
                    <div class="grid-item ms">↙</div>
                </div>
                <div class="grid-respuesta">
                    <div class="grid-item">
                        <select class="seleccion" alt="1275">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($num); $i++) { 
                            echo "<option value='$num[$i]'>$num[$i]</option>";
                        }
                    ?>
                        </select>
                    </div>
                    <div class="grid-item ms">=</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="1275">
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
function result_tipo_3_2_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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