<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('5 kilos','pera','naranja','melocotón','10 kilos');
?>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="img/1/imagen.png" alt="">
    </div>
    <div class="table">
        <h6 class="preg">Responde</h6>
        <div class="minitable">
            <div class="pregunta">
                • ¿De qué fruta se vendió 20 kg más que melocotón?
                <span>
                    <select class="slc" alt="pera">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿De qué fruta se vendió 10 kg menos que manzana?
                <span>
                    <select class="slc" alt="naranja">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            • ¿De qué fruta se vendió 15 kg menos que naranja?
                <span>
                    <select class="slc" alt="melocotón">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            ¿Cuántos kilos más de plátano se vendieron que melocotón?
                <span>
                    <select class="slc" alt="10 kilos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
            • ¿Cuántos kilos menos de pera se vendieron que manzana?
                <span>
                    <select class="slc" alt="5 kilos">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=0; $i < count($numeros); $i++) { 
                            echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
            <div class="pregunta">
                • ¿Cuántos kilos de fruta se vendieron en total?
                <span>
                    <select class="slc" alt="220">
                        <option value="" disabled selected></option>
                        <?php
                        for ($i=218; $i < 224; $i++) { 
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                    </select>
                </span>
            </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/5/respuesta.png">
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
<script type="text/javascript">
$('select').formSelect();

// Select
var r = 0;
$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();
    console.log(slcalt);
    console.log(slcval);
    if (slcalt == slcval) {
        r++;
    }
});

console.log(r);
// Formulario - Registrados

function result_tipo_2_1_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6 ) {
        console.log(r);
        localStorage.setItem("Nota2-1-19", "2");
        localStorage.setItem("Time2-1-19", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-1-19", "0");
        localStorage.setItem("Time2-1-19", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>