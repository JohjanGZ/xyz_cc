<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $num = array('190','610','800','234','376'); ?>

<body>

    <div class="container-two">
        <span class="mb"><span class="s">•</span> Carla compró arroz por el valor de S/ 376 y azúcar por S/ 234.
            ¿Cuánto dinero le queda si
            llevó S/ 800?</span>
        <div class="image">
            <img src="<?=$dir?>/img/1.png" class="img">
            <img src="<?=$dir?>/img/2.png" class="img">
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="800">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s">-</span>
                        <span class="s">(</span>
                        <select class="seleccion" alt="376">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="item">
                        <span class="s"> + </span>
                        <select class="seleccion" alt="234">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">)</span>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="800">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s"> - </span>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="610">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
                <div class="grid-respuesta2">
                    <div class="item">
                        <select class="seleccion" alt="190">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($num); $i++) { 
                                    echo "<option value='$num[$i]'>$num[$i]</option>";
                                }
                            ?>
                        </select>
                        <span class="s">=</span>
                    </div>
                    <div class="item">x</div>
                </div>
            </div>
            <div class="grid-item">
                <span class="so">Respuesta:</span>
                <div class="item">
                    Le queda  S/
                    <select class="seleccion" alt="190">
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
function result_tipo_3_3_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 7) {
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