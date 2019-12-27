<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $barras = array('3 500 g','4 500 g','8 000 g','7,5 kg','8,5 kg','9,3 kg','10 kg'); 
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="table">
                <div>a. 8 kg = <span>
                        <select class="slc seleccion" alt="8 000 g">
                            <option value="" disabled selected></option>
                            <?php
                            for ($i=0; $i < count($barras); $i++) { 
                                    echo "<option value='$barras[$i]'>$barras[$i]</option>";
                                }
                            ?>
                        </select>
                    </span></div>
                <div>b. 7 500 g = <span>
                        <select class="slc seleccion" alt="7,5 kg">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($barras); $i++) { 
                                    echo "<option value='$barras[$i]'>$barras[$i]</option>";
                                }
                            ?>
                        </select>
                    </span></div>
                <div>c. 9 300 g = <span>
                        <select class="slc seleccion" alt="9,3 kg">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                        </select>
                    </span></div>
                <div>d. 4,5 kg = <span>
                        <select class="slc seleccion" alt="4 500 g">
                            <option value="" disabled selected></option>
                            <?php
                        for ($i=0; $i < count($barras); $i++) { 
                            echo "<option value='$barras[$i]'>$barras[$i]</option>";
                        }
                    ?>
                        </select>
                    </span></div>
            </div>
            <div class="image">

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
function result_tipo_2_6_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 4) {
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