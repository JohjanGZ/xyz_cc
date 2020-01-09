<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style>
@media only screen and (max-width: 1200px) {
    .container-two {
        padding-top: 4vh;
        margin: 0 auto;
        max-width: 1100px;
        width: 81%;
    }
}

@media only screen and (max-width: 1100px) {
    .container-two {
        padding-top: 4vh;
        margin: 0 auto;
        max-width: 1100px;
        width: 90%;
    }
}
</style>
<?=$titulo?>
<div class="container-two">
    <div class="row boxCheck" id="boxCheck">
        <div class="cajas col s7">
            <h4>• T = {nombres de mis profesores}</h4>
        </div>
        <div class="cajas col s5">
            <p class="checkboxMa aleatorio">
                <label>
                    <input type="checkbox" class="filled-in" id="extencionUno" name="group1[]" />
                    <span>Por extensión</span>
                </label>
                <label>
                    <input type="checkbox" class="filled-in" id="extencionDos" name="group1[]" />
                    <span>Por comprensión</span>
                </label>
            </p>
        </div>
    </div>
    <div class="row boxCheck">
        <div class="cajas col s7">
            <h4>• N = {Perú, Ecuador, Colombia, Bolivia, Brasil}</h4>
        </div>
        <div class="cajas col s5">
            <p class="checkboxMa aleatorio">
                <label>
                    <input type="checkbox" class="filled-in" id="extencionTres" name="group2[]" />
                    <span>Por extensión</span>
                </label>
                <label>
                    <input type="checkbox" class="filled-in" id="extencionCuatro" name="group2[]" />
                    <span>Por comprensión</span>
                </label>
            </p>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas col s7">
            <h4>• G = {miembros de la familia}</h4>
        </div>
        <div class="cajas col s5">
            <p class="checkboxMa aleatorio">
                <label>
                    <input type="checkbox" class="filled-in" id="extencionCinco" name="group3[]" />
                    <span>Por extensión</span>
                </label>
                <label>
                    <input type="checkbox" class="filled-in" id="extencionSeis" name="group3[]" />
                    <span>Por comprensión</span>
                </label>
            </p>
        </div>
    </div>
    <div class="row boxCheck white">
        <div class="cajas col s7">
            <h4>• P = {perro, gato, conejo, pato}</h4>
        </div>
        <div class="cajas col s5">
            <p class="checkboxMa aleatorio">
                <label>
                    <input type="checkbox" class="filled-in" id="extencionSiete" name="group4[]" />
                    <span>Por extensión</span>
                </label>
                <label>
                    <input type="checkbox" class="filled-in" id="extencionOcho" name="group4[]" />
                    <span>Por comprensión</span>
                </label>
            </p>
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
<script type="text/javascript">
var opc1, opc2, opc3, opc4, opc5, opc6, opc7, opc8;

opc1 = $('#extencionUno').val();
opc2 = $('#extencionDos').val();

opc3 = $('#extencionTres').val();
opc4 = $('#extencionCuatro').val();

opc5 = $('#extencionCinco').val();
opc6 = $('#extencionSeis').val();

opc7 = $('#extencionSiete').val();
opc8 = $('#extencionOcho').val();

$('input[type="checkbox"]').on('change', function() {
    $('input[name="' + this.name + '"]').not(this).prop('checked', false);
});

// console.log(opc2, opc1);
// Formulario - Registrados

function result_tipo_2_0_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if ($('input:checkbox[id=extencionUno]:checked').val() == null &&
        $('input:checkbox[id=extencionDos]:checked').val() == "on" &&
        $('input:checkbox[id=extencionTres]:checked').val() == "on" &&
        $('input:checkbox[id=extencionCuatro]:checked').val() == null &&
        $('input:checkbox[id=extencionCinco]:checked').val() == null &&
        $('input:checkbox[id=extencionSeis]:checked').val() == "on" &&
        $('input:checkbox[id=extencionSiete]:checked').val() == "on" &&
        $('input:checkbox[id=extencionOcho]:checked').val() == null) {

        // console.log(opc1, opc2, opc3);
        localStorage.setItem("Nota2-0-7", "2");
        localStorage.setItem("Time2-0-7", tiempo);
        correcto();

    } else {
        incorrecto();
        localStorage.setItem("Nota2-0-7", "0");
        localStorage.setItem("Time2-0-7", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>