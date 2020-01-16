<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('121','789','578','111','351','518','678'); ?>

<body>

    <div class="container-two">
        <span class="mb"><span class="s">•</span> Raúl tiene S/ 678 para comprarse una tablet que cuesta S/ 789. Si su
            tía le presta lo que le
            falta, ¿cuánto dinero le prestó su tía?</span>
        <div class="image">
            <img src="<?=$dir?>/img/1.png" class="img">
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="678">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s">+</span>
                        x
                    </div>
                    <div class="item">
                        <span class="s"> = </span>
                        <select class="seleccion" alt="789">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="grid-respuesta2">
                    <div class="item">
                        x
                        <span class="s"> = </span>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="789">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">-</span>
                    </div>
                    <div class="item">
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
                <div class="grid-respuesta2">
                    <div class="item">x</div>
                    <div class="item">
                        <span class="s">=</span>
                        <select class="seleccion" alt="111">
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
            <div class="grid-item">
                <span class="so">Respuesta:</span>
                <div class="item">
                    Su tía le prestó S/
                    <select class="seleccion" alt="111">
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
function result_tipo_3_7_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 6) {
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