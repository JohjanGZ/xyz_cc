<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $letras = array('Nueve mil setecientos sesenta y tres','Nueve mil setecientos sesenta y dos','Cuatro mil quinientos treinta y nueve', 'Nueve mil setecientos veintiuno', 'Nueve mil setecientos setenta y dos','Siete mil novecientos ochenta y cinco');
?>
<body>
    <div class="container-two aleatori">
        <div class="content">
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <select class="slc seleccion" alt="Nueve mil setecientos sesenta y dos">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letras); $i++) { 
                                echo "<option value='$letras[$i]'>$letras[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <select class="slc seleccion" alt="Cuatro mil quinientos treinta y nueve">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letras); $i++) { 
                                echo "<option value='$letras[$i]'>$letras[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <select class="slc seleccion" alt="Siete mil novecientos ochenta y cinco">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letras); $i++) { 
                                echo "<option value='$letras[$i]'>$letras[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/4.png" alt="">
                    <select class="slc seleccion" alt="Nueve mil setecientos veintiuno">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letras); $i++) { 
                                echo "<option value='$letras[$i]'>$letras[$i]</option>";
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
$('select').formSelect();

// Validar
function result_tipo_2_9_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 4) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>