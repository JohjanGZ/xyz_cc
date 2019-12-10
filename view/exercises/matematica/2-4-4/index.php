<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('0','1','2','3','4','5','6','7','8','9');
?>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="boxDescription">
            <div class="texto">
                • En la librería hay 478 cuadernos. Si 154 cuadernos son cuadriculados, ¿cuántos cuadernos rayados hay?
            </div>
            <div class="image">
                <img src="img/21/libros.png" alt="">
            </div>
        </div>
        <div class="table">
            <div class="fila">
                <div class="c">C</div>
                <div class="d">D</div>
                <div class="u">U</div>
                <div></div>
            </div>
            <div class="fila">
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="resta d">-</div>
            </div>
            <div class="fila">
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
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
            <hr>
            <div class="fila">
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
                        <option value="" disabled selected></option>
                        <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                    </select>
                </div>
                <div>
                    <select class="slc" alt="1">
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

        <div class="respuesta">
            Respuesta: Hay
            <div>
                <select class="slc" alt="1">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=322; $i < 327; $i++) { 
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                </select>
            </div>
            cuadernos rayados.
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
// Validar
function result_tipo_2_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        // console.log(r);
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>