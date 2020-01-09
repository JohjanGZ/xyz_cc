<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('4 + 4 = 8','4 + 4 + 4 = 12','4 + 4 + 4 + 4 = 16','4 + 4 + 4 + 4 + 4 = 20','4 + 4 + 4 + 4 + 4 + 4 = 24'); 
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
                <h6>Meses</h6>
            </div>
            <div class="grid-item he">
                <h6>N.º de libros</h6>
            </div>
            <div class="grid-item">
                Septiembre
            </div>
            <div class="grid-item">
                4 + 4 = 8
            </div>
            <div class="grid-item">
                Octubre
            </div>
            <div class="grid-item">
            <select class="slc seleccion" alt="4 + 4 + 4 + 4 + 4 = 20">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item imageCaballo">
                Noviembre
            </div>
            <div class="grid-item">
                <select class="slc seleccion" alt="4 + 4 + 4 = 12">
                    <option value="" disabled selected></option>
                    <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="grid-item">
                Diciembre
            </div>
            <div class="grid-item">
            <select class="slc seleccion" alt="4 + 4 + 4 + 4 + 4 + 4 = 24">
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
function result_tipo_2_0_17() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 3) {
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