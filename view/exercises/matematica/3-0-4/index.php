<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$comprension = array('A={Regiones geográficas del Perú}','U={Simbolos patrios del Perú}','T={Número naturales menores que 6}','L={cubiertos}','V={Figuras Geométricas}');
?>

<body>
    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item wc">Por comprensión</div>
            <div class="grid-item we">Por extensión</div>
        </div>
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item wc">A <span class="s">= {</span>costa, sierra, selva<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$comprension[0]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">U <span class="s">= {</span>bandera, escudo, himno nacional<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$comprension[1]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">T <span class="s">= {</span>0; 1; 2; 3; 4; 5<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$comprension[2]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">L <span class="s">= {</span>cuchara, tenedor, cuchillo<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$comprension[3]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">V <span class="s">= {</span>triángulo, cuadrado, rectángulo<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$comprension[4]?>">
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
function result_tipo_3_0_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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