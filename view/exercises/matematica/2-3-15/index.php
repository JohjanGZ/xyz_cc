<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('120','410','400', '254');

?>
<div class="container-two aleatorio">
    <div class="item card-panel blue darken-1">
        <div class="numero">
            <h5>119</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="120">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="numero">
            <h5>121</h5>
        </div>
    </div>
    <div class="item card-panel blue darken-1">
        <div class="numero">
            <h5>399</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="400">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="numero">
            <h5>401</h5>
        </div>
    </div>
    <div class="item card-panel blue darken-1">
        <div class="numero">
            <h5>409</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="410">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="numero">
            <h5>411</h5>
        </div>
    </div>
    <div class="item card-panel blue darken-1">
        <div class="numero">
            <h5>253</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="254">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
        <div class="numero">
            <h5>255</h5>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/10/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">

$('select').formSelect();

// Select
var r = 0;
$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();

    if (slcalt == slcval) {
        r++;
        console.log(r);
    }
});
// Formulario - Registrados

function result_tipo_2_3_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        console.log(r);
        localStorage.setItem("Nota2-3-15", "2");
        localStorage.setItem("Time2-3-15", tiempo);
        correcto();

    }

    else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-3-15", "0");
        localStorage.setItem("Time2-3-15", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>