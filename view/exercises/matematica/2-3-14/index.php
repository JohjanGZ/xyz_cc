<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('470','262','328', '453','380','488');

?>
<div class="container-two aleatorio">
    <div class="item card-panel">
        <div class="numero">
            <h5>469</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="470">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="item card-panel">
        <div class="numero">
            <h5>379</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="380">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="item card-panel">
        <div class="numero">
            <h5>487</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="488">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="item card-panel">
        <div class="numero">
            <h5>452</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="453">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="item card-panel">
        <div class="numero">
            <h5>327</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="328">
                <option value="" disabled selected></option>
                <?php
                    for ($i=0; $i < count($numeros); $i++) { 
                        echo "<option value='$numeros[$i]'>$numeros[$i]</option>";
                    }
                ?>
            </select>
        </div>
    </div>
    <div class="item card-panel">
        <div class="numero">
            <h5>261</h5>
        </div>
        <div class="selector">
            <select class="slc" alt="262">
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
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/9/respuesta.png">
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

function result_tipo_2_3_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r);
        localStorage.setItem("Nota2-3-14", "2");
        localStorage.setItem("Time2-3-13", tiempo);
        correcto();

    }

    else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-3-14", "0");
        localStorage.setItem("Time2-3-14", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>