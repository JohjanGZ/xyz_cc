<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('90','azul','rojo','50','verde');
?>
<?=$titulo?>
<div class="container-two">
    <div class="parrafo">
        <p>
            Silvia pagó 11 soles por el plátano y la fresa, pero ella cree que pagó demás. ¿Puedes decir cuánto debería haber pagado?
        </p>
        <div class="image">
            <img src="<?= $dir ?>/img/imagen.png" alt="">
        </div>
    </div>
    <div class="respuesta">
    <b>Respuesta:</b> Silvia debería haber pagado  
        <span>
            <select class="slc" alt="8">
                <option value="" disabled selected></option>
                <?php
                    for ($i=1; $i < 10; $i++) { 
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            </select>
        </span>
          soles.
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

function result_tipo_2_1_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
        console.log(r);
        localStorage.setItem("Nota2-1-21", "2");
        localStorage.setItem("Time2-1-21", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-1-21", "0");
        localStorage.setItem("Time2-1-21", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>