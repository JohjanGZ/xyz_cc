<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('12','13','14','15','16','17','18','19','20','21','22','23','24','25'); 
?>

<body>
    <div class="container-two">
        <div class="columnaUno">
            <div class="">
                <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
            </div>
        </div>
        <div class="columnaDos grid-container">
            <div class="grid-item he">
                <h6>Cometas</h6>
            </div>
            <div class="grid-item he">
                <h6>Conteo</h6>
            </div>
            <div class="grid-item he">
                <h6>Cantidad</h6>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" alt="">
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="25">
                    <option value="" disabled selected></option>
                   <option value="25">IIIII IIIII IIIII IIIII IIIII</option>
                   <option value="">IIIII IIIII IIIII IIIII </option>
                   <option value="">IIIII IIIII IIIII IIIII II</option>
                   <option value="">IIIII IIIII IIIII IIIII IIIII I</option>

                </select>
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="25">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item imageCaballo">
                <img src="<?= $dir ?>/img/3.png" alt="">
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="14">
                    <option value="" disabled selected></option>
                    <option value="">IIIII IIIII II</option>
                    <option value="">IIIII IIIII IIIII </option>
                    <option value="14">IIIII IIIII IIII</option>
                    <option value="">IIIII IIIII III</option>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="14">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" alt="">
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="16">
                    <option value="" disabled selected></option>
                   <option value="">IIIII IIIII IIIII III </option>
                   <option value="">IIIII IIIII IIII</option>
                   <option value="">IIIII IIIII IIIII II</option>
                    <option value="16">IIIII IIIII IIIII I</option>
                </select>
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="16">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_1_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 6) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>