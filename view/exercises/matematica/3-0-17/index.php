<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
$extension = array(
    'Y={rojo, blanco, verde}',
    'Y={blanco, rojo}',
    'W={0; 2; 4; 6; 8}',
    'W={2; 4; 6; 8}',
    'G={M, A, R}',
    'G={M; A; R}',
    'V={Martín Vizcarra}',
    'V={Pedro Pablo Kuczynski}',
    'R={0; 1; 2; 3; 4}',
    'R={1; 2; 3; 4}'
);
?>

<body>
    <div class="container-two">
        <div class="grid-head">
            <div class="grid-item wc">Por comprensión</div>
            <div class="grid-item we">Por extensión</div>
        </div>
        <div class="grid-body">
            <div class="grid-box">
                <div class="grid-item wc">Y <span class="s">= {</span>Colores de la bandera peruana<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$extension[1]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">W <span class="s">= {</span>Números pares menores que 10<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$extension[2]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">G <span class="s">= {</span>Letras de la palabra MAR<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$extension[4]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">V <span class="s">= {</span>Presidente del Perú<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$extension[6]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
                            }                                
                        ?>
                    </select>
                </div>
            </div>
            <div class="grid-box">
                <div class="grid-item wc">R <span class="s">= {</span>Números naturales menores que 5<span class="s">}</span></div>
                <div class="grid-item we">
                    <select class="slc" alt="<?=$extension[8]?>">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($extension); $i++) { 
                                echo "<option value='$extension[$i]'>$extension[$i]</option>";
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
function result_tipo_3_0_17() {
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