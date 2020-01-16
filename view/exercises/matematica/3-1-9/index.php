<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('86','73','13','25','61','48'); ?>

<body>

    <div class="container-two">
        <div class="grid-container">
            <div class="grid-ejercicio">
                <div class="ejercicio">
                    13 <span class="ms">+</span> 48 <span class="ms"> + </span> 25 <span class="ms"> = </span> 86
                </div>
                <div class="grid-head">
                    <div class="grid-item">
                        <select class="seleccion" alt="13">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>( $num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="48">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i] )</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="25">
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
                        <select class="seleccion" alt="13">
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
                        <select class="seleccion" alt="48">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>( $num[$i] </option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="grid-item ms">+</div>
                    <div class="grid-item">
                        <select class="seleccion" alt="25">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i] )</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-flechas">
                    <span class="ms ml">↘</span>
                    <span class="ms">↙</span>
                    <span class="ms"></span>
                    <span class="ms"></span>
                    <span class="ms"></span>
                    <span class="ms">↘</span>
                    <span class="ms">↙</span>
                </div>
                <div class="grid-respuesta">
                    <div class="grid-item">
                        <select class="seleccion" alt="61">
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
                        <select class="seleccion" alt="25">
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
                        <select class="seleccion" alt="13">
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
                        <select class="seleccion" alt="73">
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
                    <span class="s ml">↘</span>
                    <span class="s">↙</span>
                    <span class="s"></span>
                    <span class="s"></span>
                    <span class="s">↘</span>
                    <span class="s">↙</span>
                </div>
                <div class="grid-final">
                    <div class="grid-item">
                        <select class="seleccion w" alt="86">
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
                        <select class="seleccion" alt="86">
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
function result_tipo_3_1_9() {
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