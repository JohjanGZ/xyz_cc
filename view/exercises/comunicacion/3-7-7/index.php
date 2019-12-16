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
                        <span class="celeste">●</span> Perú es a país como Miraflores es a.. <span class="palabra" alt="distrito">x</span>
                        </p>
                        <p>
                        <span class="celeste">●</span> Pinacoteca es a cuadro como hemeroteca es a.. <span class="palabra" alt="revista">x</span>
                        </p>
                        <p>
                        <span class="celeste">●</span> Girasol es a flor como elefante es a.. <span class="palabra" alt="animal">x</span>
                        </p>
                        <p>
                        <span class="celeste">●</span> Ciego es a visión como sordo es a..<span class="palabra" alt="audicion">x</span>
                        </p>
                        <p>
                        <span class="celeste">●</span> Día es a noche como compañía es a.. <span class="palabra" alt="soledad">x</span>
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="distrito">distrito</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="revista">revista</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="animal">animal</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="audicion">audición</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="soledad">soledad</h4>
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
function result_tipo_3_7_7() {
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