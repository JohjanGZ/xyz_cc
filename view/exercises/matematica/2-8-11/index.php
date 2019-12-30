<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php 
    $numeros = array('Seis mil setecientos dieciocho','Tres mil doscientos nueve','Siete mil setecientos once','Cinco mil seiscientos cuarenta y ocho','Cuatro mil ochocientos cuatro','Mil novecientos noventa y dos','Siete mil setecientos doce'); 
?>
<body>
    <div class="container-two">
        <div class="content aleatorio">
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Cinco mil seiscientos cuarenta y ocho">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Siete mil setecientos doce">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Cuatro mil ochocientos cuatro">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/4.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Seis mil setecientos dieciocho">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/5.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Mil novecientos noventa y dos">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="image">
                    <img src="<?= $dir ?>/img/6.png" alt="">
                    <div>
                        <select class="slc seleccion" alt="Tres mil doscientos nueve">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </div>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_8_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 6) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>