<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('3','4','5','6','7','8','9','10')
?>
<body>
    <div class="caja-principal">
        <div class="content aleatorio">
            <div class="column">
                <div class="image">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> lados.</span>
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> vértices.</span>
                </div>
            </div>
            <div class="column">
                <div class="image">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> lados.</span>
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> vértices.</span>
                </div>
            </div>
            <div class="column">
                <div class="image">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> lados.</span>
                </div>
                <div class="problem">
                    <span>Tiene </span>
                    <span>
                        <select class="slc seleccion" alt="8">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                    </span>
                    <span> vértices.</span>
                </div>
            </div>

        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
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


function result_tipo_2_4_12() {
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
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>