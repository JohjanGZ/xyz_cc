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
                        <span class="celeste">●</span> Madre, madre, tú me  <span class="palabra" alt="besas">x</span>, pero yo te beso más.
                        </p>
                        <p>
                        <span class="celeste">●</span> Si la abeja se entra al lirio, no se siente su  <span class="palabra" alt="aletear">x</span>.
                        </p>
                        <p>
                        <span class="celeste">●</span> Yo te miro, yo te<span class="palabra" alt="miro">x</span> sin cansarme de mirar.
                        </p>
                        <p>
                        <span class="celeste">●</span> El <span class="palabra" alt="estanque">x</span> copia todo lo que tú mirando estás.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="besas">besas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aletear">aletear</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="miro">miro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="estanque">estanque</h4>
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
function result_tipo_3_3_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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