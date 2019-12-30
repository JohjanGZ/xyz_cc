<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('6 905','8 094','5 768','7 319','7 285','7 316','8 097','6 906','7 283')
?>

<body>
    <div class="container-two">
        <div class="content">
            <div class="columna">
                <div><img src="<?= $dir ?>/img/1.png" alt=""></div>
                <div class="amarillo">
                    <select class="slc seleccion" alt="5 768">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div></div>
            </div>
            <div class="columna">
                <div></div>
                <div class="azul">
                    <select class="slc seleccion" alt="7 285">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div><img src="<?= $dir ?>/img/2.png" alt=""></div>
            </div>
            <div class="columna">
                <div><img src="<?= $dir ?>/img/3.png" alt=""></div>
                <div class="amarillo">
                    <select class="slc seleccion" alt="7 319">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div></div>
            </div>
            <div class="columna">
                <div></div>
                <div class="azul">
                    <select class="slc seleccion" alt="8 094">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div><img src="<?= $dir ?>/img/4.png" alt=""></div>
            </div>
            <div class="columna">
                <div><img src="<?= $dir ?>/img/5.png" alt=""></div>
                <div class="amarillo">
                    <select class="slc seleccion" alt="6 905">
                        <option value="" disabled selected></option>
                        <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                    </select>
                </div>
                <div></div>
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
function result_tipo_2_8_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 5) {
        console.log(r)
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>