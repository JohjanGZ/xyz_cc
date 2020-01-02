<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$comprension = array('U={ A,E,I,O }','U={ U,I,E,A,O }','A={ días de la semana }','L={ primavera, verano, otoño, invierno }','T={ 1 < x < 11; x es par }','V={ Sabores }');
?>

<body>
    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item wc">Por extensión</div>
            <div class="grid-item we">Por comprensión</div>
        </div>
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item wc">A <span class="s">= {</span>lunes, martes, miércoles, jueves, viernes, sábado,
                    domingo<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="A={ días de la semana }">
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
                <div class="grid-item we">
                    <select class="slc" alt="U={ U,I,E,A,O }">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item wc">U <span class="s">= {</span>Vocales de la palabra MURCIÉLAGO<span
                        class="s">}</span></div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">T <span class="s">= {</span>2; 4; 6; 8; 10<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="T={ 1 < x < 11; x es par }">
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
                <div class="grid-item we">
                    <select class="slc" alt="L={ primavera, verano, otoño, invierno }">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($comprension); $i++) { 
                                echo "<option value='$comprension[$i]'>$comprension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
                <div class="grid-item wc">L <span class="s">= {</span>Estaciones del año<span class="s">}</span>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">V <span class="s">= {</span>dulce, salado, ácido, amargo<span
                        class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="V={ Sabores }">
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
function result_tipo_3_0_5() {
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