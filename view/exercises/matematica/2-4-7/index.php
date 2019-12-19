<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('2','3','4','5','6','7','8','9','10','11','12');
?>
<?=$titulo?>
<div class="container-two">
    <div class="fila">
        <div class="image">
            <img src="<?= $dir ?>/img/1.png" alt="">
        </div>
    </div>
    <div class="problema">
        <div class="filaproblemas">
            <span>3</span>
            <span class="rojo">+</span>
            <span>3</span>
            <span class="rojo">+</span>
            <span>3</span>
            <span class="rojo">=</span>
            <span>
                <select class="slc seleccion" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </span>
        </div>
        <div class="filaproblemas">
            <span>3</span>
            <span></span>
            <span>veces</span>
            <span></span>
            <span>3</span>
            <span class="rojo">=</span>
            <span>
                <select class="slc seleccion" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </span>
        </div>
        <div class="filaproblemas">
            <span>3</span>
            <span> </span>
            <span class="rojo">x</span>
            <span> </span>
            <span>3</span>
            <span class="rojo">=</span>
            <span>
                <select class="slc seleccion" alt="9">
                    <option value="" disabled selected></option>
                    <?php
                            for ($i=0; $i < count($numeros); $i++) { 
                                echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                            }
                        ?>
                </select>
            </span>
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
<?php require('../../../tools/botones/botones.php');?>
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados


function result_tipo_2_4_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 9) {
        console.log(r);
        localStorage.setItem("Nota2-4-7", "2");
        localStorage.setItem("Time2-4-7", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-4-7", "0");
        localStorage.setItem("Time2-4-7", tiempo);

    }
}
</script>