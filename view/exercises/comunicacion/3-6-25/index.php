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
                <ul id="alfabeto">
                    <li id="1" class="palabra">
                        <span>Eduardo dió la vuelta tranquilamente, y se dirigió al dragón que tenía en frente.</span>
                    </li>
                    <li id="2" class="palabra">
                        <span>Al dragón no le gustaba nada aquello que le pudieran cortar el cuello .</span>
                    </li>
                    <li id="3" class="palabra">
                        <span>Eduardo levantó una nube de polvo y desapareció.</span>
                    </li>
                    <li id="4" class="palabra">
                        <span>El dragón se metió en la jaula, no pudo salir y allí sigue.</span>
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

$("#alfabeto").sortable();
$( "#salfabeto" ).disableSelection();

var ul = document.querySelector('#alfabeto');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

function result_tipo_3_6_25() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    var order = $("#alfabeto").sortable("toArray");
    order = JSON.stringify(order);

    correct = '["1","2","3","4"]';


    if (order == correct) {
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