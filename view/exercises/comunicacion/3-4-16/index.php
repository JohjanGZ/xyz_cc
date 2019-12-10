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

            <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <p>
                        <span class="celeste">●</span><span class="palabra" alt="el">x</span> bailó sin parar.
                        </p>
                        <p>
                        <span class="celeste">●</span><span class="palabra" alt="nosotros">x</span> sabemos jugar fútbol muy bien.
                        </p>
                        <p>
                        <span class="celeste">●</span><span class="palabra" alt="ella">x</span> trabaja como diputada.
                        </p>
                        <p>
                        <span class="celeste">●</span><span class="palabra" alt="tu">x</span> eres un prestigioso profesor.
                        </p>
                        <p>
                        <span class="celeste">●</span><span class="palabra" alt="ellas">x</span> tienen una tienda de ropa.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="nosotros">Nosotros</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">Él</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ella">Ella</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tu">Tú</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ellas">Ellas</h4>
                </li>
            </ul>
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
function result_tipo_3_4_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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