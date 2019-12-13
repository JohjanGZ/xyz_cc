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
                        <span>El</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>caballo</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>blanco</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>camina</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>con</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>elegancia</span>
                    </li>
                </ul>
                <ul class="alfabeto uno">
                    <li id="1" class="palabra">
                        <span>El</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>niño</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>juega</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>con</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>sus</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>amigos</span>
                    </li>
                </ul>
                <ul class="alfabeto dos">
                    <li id="1" class="palabra">
                        <span>Juana</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>cocina</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>una</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>rica</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>sopa</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>instantánea</span>
                    </li>
                </ul>
                <ul class="alfabeto tres">
                    <li id="1" class="palabra">
                        <span>Juan</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>limpia</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>su</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>taller</span>
                    </li>
                    <li id="5" class="palabra">
                        <span>de</span>
                    </li>
                    <li id="6" class="palabra">
                        <span>mecánica</span>
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



function result_tipo_3_7_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    comprobar_listas();
    console.log(r);

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