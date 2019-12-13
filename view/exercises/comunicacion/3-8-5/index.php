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

            <div class="contenedor-ejercicio">
                <ul class="alfabeto">
                    <li id="1" class="palabra">
                        <span>La</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>casa</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>de</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>Felipe</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>es</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>grande</span>
                    </li>
                    <li id="7" class="palabra">
                        <span>y</span>
                    </li>
                    <li id="8" class="palabra">
                        <span>bonita</span>
                    </li>
                </ul>
                <ul class="alfabeto uno">
                    <li id="1" class="palabra">
                        <span>Karen</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>visita</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>a</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>su</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>abuela</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>todos</span>
                    </li>
                    <li id="7" class="palabra">
                        <span>los</span>
                    </li>
                    <li id="8" class="palabra">
                        <span>domingos</span>
                    </li>
                </ul>
                <ul class="alfabeto dos">
                    <li id="1" class="palabra">
                        <span>Un</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>lindo</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>pajarito</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>se</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>paró</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>en</span>
                    </li>
                    <li id="7" class="palabra">
                        <span>mi</span>
                    </li>
                    <li id="8" class="palabra">
                        <span>ventana</span>
                    </li>
                </ul>
                <ul class="alfabeto tres">
                    <li id="1" class="palabra">
                        <span>La</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>mesa</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>redonda</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>está</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>llena</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>de</span>
                    </li>
                    <li id="7" class="palabra">
                        <span>frutas</span>
                    </li>
                    <li id="8" class="palabra">
                        <span>frescas</span>
                    </li>
                </ul>
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
var v = 1;

$(".alfabeto").sortable();
$( ".salfabeto" ).disableSelection();



function result_tipo_3_8_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    comprobar_listas();

    if (r == 4) {
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