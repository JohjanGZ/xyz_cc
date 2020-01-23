<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-palabras">

                <p>
                    ca<span class="tonica">mi</span>no: 
                    <span class="palabra" alt="n">verdadero</span>
                    <span class="palabra">falso</span>
                </p>
                <p>
                    ja<span class="tonica">món</span>: 
                    <span class="palabra" alt="n">verdadero</span>
                    <span class="palabra">falso</span>
                </p>
                <p>
                    <span class="tonica">prin</span>cesa: 
                    <span class="palabra" alt="x">verdadero</span>
                    <span class="palabra" alt="n">falso</span>
                </p>
                <p>
                    lo<span class="tonica">co</span>: 
                    <span class="palabra" alt="x">verdadero</span>
                    <span class="palabra" alt="n">falso</span>
                </p>
                <p>
                    parti<span class="tonica">do</span>: 
                    <span class="palabra" alt="x">verdadero</span>
                    <span class="palabra" alt="n">falso</span>
                </p>
                <p>
                    ro<span class="tonica">to</span>: 
                    <span class="palabra" alt="x">verdadero</span>
                    <span class="palabra" alt="n">falso</span>
                </p>

                <p>
                    Argen<span class="tonica">ti</span>na: 
                    <span class="palabra" alt="n">verdadero</span>
                    <span class="palabra" alt="x">falso</span>
                </p>
                <p>
                    Es<span class="tonica">pa</span>ña: 
                    <span class="palabra" alt="n">verdadero</span>
                    <span class="palabra" alt="x">falso</span>
                </p>
                <p>
                    Alba<span class="tonica">ha</span>ca: 
                    <span class="palabra" alt="n">verdadero</span>
                    <span class="palabra" alt="x">falso</span>
                </p>

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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

var r = 0;


var ul = document.querySelector('.contenedor-palabras');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".palabra").click(function() {
    $(this).css({
        "border": "solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF"
    });
    var element = $(this).attr("alt");
    var select = $(this).attr("value");
    if (select != "seleccionado") {

        if (element == "n") {
            r++;
            $(this).attr("value", "seleccionado");
        } else {
            r--;
            $(this).attr("value", "seleccionado");
        }
    }
});




function result_tipo_4_0_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>