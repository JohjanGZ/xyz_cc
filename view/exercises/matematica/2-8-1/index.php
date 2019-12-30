<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('0','1','2','3','4','5','4000','5000','Cuatro mil','Cinco mil')
?>
<body>
    <div class="container-two">
        <div class="content aleatorio">
            <div class="item">
                <img src="<?= $dir ?>/img/1.png" alt="">
                <div class="info">
                    <span> <span>
                            4
                        </span> millares <span class="rojo">=</span>
                        <span>
                            4000
                        </span> unidades</span>
                </div>
                <div class="tabla">
                    <div class="header">
                        <div>UM</div>
                        <div>C</div>
                        <div>D</div>
                        <div>U</div>
                    </div>
                    <div class="fila">
                        <div>
                        <select class="slc seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="rptafinal">
                        <span>Se lee: <span>
                        <select class="slc seleccion" alt="Cuatro mil">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span></span>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/2.png" alt="">
                <div class="info">
                    <span> <span>
                            <select class="slc seleccion" alt="5">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span> millares <span class="rojo">=</span>
                        <span>
                            <select class="slc seleccion" alt="5000">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span> unidades</span>
                </div>
                <div class="tabla">
                    <div class="header">
                        <div>UM</div>
                        <div>C</div>
                        <div>D</div>
                        <div>U</div>
                    </div>
                    <div class="fila">
                        <div>
                        <select class="slc seleccion" alt="5">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                        <div>
                        <select class="slc seleccion" alt="0">
                            <option value="" disabled selected></option>
                            <?php
                                for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                            ?>
                        </select>
                        </div>
                    </div>
                    <div class="rptafinal">
                        <span>Se lee: <span>
                        <select class="slc seleccion" alt="Cinco mil">
                                <option value="" disabled selected></option>
                                <?php
                                    for ($i=0; $i < count($numeros); $i++) { 
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span></span>
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
function result_tipo_2_8_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 12) {
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