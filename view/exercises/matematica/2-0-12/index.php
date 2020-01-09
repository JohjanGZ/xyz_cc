<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numero = array('1','2','3','4','5','6','7','8','9');
    $letra = array('A','B','C','D','E','F');
?>
<body>

    <div class="container-two">
        <div class="imagen">
            <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
        </div>
        <div class="problema">
            <div class="item">
                <img src="<?= $dir ?>/img/2.png" alt="">
                <div>
                    <span>( 
                        <span><select class="slc seleccion" alt="6">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numero); $i++) { 
                                echo "<option value='$numero[$i]'>$numero[$i]</option>";
                            }
                        ?>
                    </select></span>; <span><select class="slc seleccion" alt="C">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letra); $i++) { 
                                echo "<option value='$letra[$i]'>$letra[$i]</option>";
                            }
                        ?>
                    </select></span> )</span>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/3.png" alt="">
                <div>
                    <span>( 
                        <span><select class="slc seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numero); $i++) { 
                                echo "<option value='$numero[$i]'>$numero[$i]</option>";
                            }
                        ?>
                    </select></span>; <span><select class="slc seleccion" alt="C">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letra); $i++) { 
                                echo "<option value='$letra[$i]'>$letra[$i]</option>";
                            }
                        ?>
                    </select></span> )</span>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/4.png" alt="">
                <div>
                    <span>( 
                        <span><select class="slc seleccion" alt="3">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numero); $i++) { 
                                echo "<option value='$numero[$i]'>$numero[$i]</option>";
                            }
                        ?>
                    </select></span>; <span><select class="slc seleccion" alt="A">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letra); $i++) { 
                                echo "<option value='$letra[$i]'>$letra[$i]</option>";
                            }
                        ?>
                    </select></span> )</span>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/5.png" alt="">
                <div>
                    <span>( 
                        <span><select class="slc seleccion" alt="8">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numero); $i++) { 
                                echo "<option value='$numero[$i]'>$numero[$i]</option>";
                            }
                        ?>
                    </select></span>; <span><select class="slc seleccion" alt="E">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letra); $i++) { 
                                echo "<option value='$letra[$i]'>$letra[$i]</option>";
                            }
                        ?>
                    </select></span> )</span>
                </div>
            </div>
            <div class="item">
                <img src="<?= $dir ?>/img/6.png" alt="">
                <div>
                    <span>( 
                        <span><select class="slc seleccion" alt="5">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numero); $i++) { 
                                echo "<option value='$numero[$i]'>$numero[$i]</option>";
                            }
                        ?>
                    </select></span>; <span><select class="slc seleccion" alt="D">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($letra); $i++) { 
                                echo "<option value='$letra[$i]'>$letra[$i]</option>";
                            }
                        ?>
                    </select></span> )</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_0_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 10) {
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