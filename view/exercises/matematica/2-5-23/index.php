<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('2139','2136','3020','2142','3010','2138','3000'); 
?>

<body>
    <div class="container-two">
        <div class="item">
            <div class="image imageuno">
                <span class="box boxuno">
                    <select class="slc seleccion" alt="2136">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
                <span class="box boxdos">
                    <select class="slc seleccion" alt="2139">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
                <span class="box boxtres">
                    <select class="slc seleccion" alt="2142">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
            </div>
            <div class="image imagedos">
            <span class="box boxunoe">
                    <select class="slc seleccion" alt="3020">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
                <span class="box boxdos">
                    <select class="slc seleccion" alt="3010">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
                <span class="box boxcuatro">
                    <select class="slc seleccion" alt="3000">
                        <option value="" disabled selected></option>
                        <?php for ($i=0; $i < count($barras); $i++) { 
                                echo "<option value='$barras[$i]'>$barras[$i]</option>"; } ?>
                    </select>
                </span>
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
function result_tipo_2_5_23() {
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