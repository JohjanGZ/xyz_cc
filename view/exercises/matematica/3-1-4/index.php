<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $propiedades = array('Propiedad conmutativa','Propiedad del elemento neutro','Propiedad asociativa'); ?>
<body>

    <div class="container-two">
        <div class="grid-options">
            <div class="grid-option">
                <span class="ms">•</span>
                567  <span class="ms">+</span> 384 <span class="ms">=</span> 384 <span class="ms">+</span> 567    
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad conmutativa">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                45 765 <span class="ms">+</span> 0 <span class="ms">=</span> 45 765    
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad del elemento neutro">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                297 <span class="ms">+</span> 843 <span class="ms">=</span> 843 <span class="ms">+</span> 297 
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad conmutativa">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                470 <span class="ms">+ (</span>160 <span class="ms">+</span> 617 <span class="ms">) = (</span>470 <span class="ms">+</span> 160<span class="ms">) +</span> 617
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad asociativa">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                9 438 <span class="ms">+</span> 3 628 <span class="ms">=</span> 3 628 <span class="ms">+</span> 9 438     
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad conmutativa">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-option">
                <span class="ms">•</span>
                729 <span class="ms">+ (</span>914 <span class="ms">+</span> 840<span class="ms">) = (</span>729 <span class="ms">+</span> 914<span class="ms">) +</span> 840     
                <span class="ms">→</span>
                <select class="seleccion" alt="Propiedad asociativa">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($propiedades); $i++) { 
                            echo "<option value='$propiedades[$i]'>$propiedades[$i]</option>";
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r=0;
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