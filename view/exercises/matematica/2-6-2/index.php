<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?= $titulo ?>
<?php
$numeros = array('1','2','3','4','5','6','7','8','9');
$letras = array('Tres sextos','Seis octavos','Nueve sextos','Cinco octavos','Tres novenos','Dos sextos','Tres octavos','Dos cuartos');
?>
<div class="container-two">
    <div class="content">
        <div class="tabla">
            <div class="header">
                <div>Figuras divididas</div>
                <div>Fracción coloreada</div>
                <div>Se escribe</div>
            </div>
            <div class="filas">
                <div class="fila">
                    <div class="image">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>
                    <div>
                        <span>
                            <select class="slc seleccion" alt="2">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                        <hr>
                        <span>
                            <select class="slc seleccion" alt="4">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                    </div>
                    <div class="largo">
                    <select class="slc seleccion" alt="Dos cuartos">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($letras); $i++) {
                                    echo "<option value='$letras[$i]'>$letras[$i]</option>";
                                }
                                ?>
                            </select>
                    </div>
                </div>
                <div class="fila">
                    <div class="image">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>
                    <div>
                        <span>
                            <select class="slc seleccion" alt="3">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                        <hr>
                        <span>
                            <select class="slc seleccion" alt="6">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                    </div>
                    <div class="largo">
                    <select class="slc seleccion" alt="Tres sextos">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($letras); $i++) {
                                    echo "<option value='$letras[$i]'>$letras[$i]</option>";
                                }
                                ?>
                            </select>
                    </div>
                </div>
                <div class="fila">
                    <div class="image">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>
                    <div>
                        <span>
                            <select class="slc seleccion" alt="5">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                        <hr>
                        <span>
                            <select class="slc seleccion" alt="8">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($numeros); $i++) {
                                    echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                                }
                                ?>
                            </select>
                        </span>
                    </div>
                    <div class="largo">
                    <select class="slc seleccion" alt="Cinco octavos">
                                <option value="" disabled selected></option>
                                <?php
                                for ($i = 0; $i < count($letras); $i++) {
                                    echo "<option value='$letras[$i]'>$letras[$i]</option>";
                                }
                                ?>
                            </select>
                    </div>
                </div>
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
<?php require('../../../tools/botones/botones.php'); ?>
<script>
    $("#next").attr("onclick", "<?= $next ?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Formulario - Registrados


    function result_tipo_2_6_2() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;
        r = 0;
        seleccion_lista();

        if (r == 9) {
            console.log(r);
            localStorage.setItem("Nota2-4-8", "2");
            localStorage.setItem("Time2-4-8", tiempo);
            correcto();

        } else {
            console.log(r);
            incorrecto();
            localStorage.setItem("Nota2-4-8", "0");
            localStorage.setItem("Time2-4-8", tiempo);

        }
    }
</script>