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
                        <span class="celeste">●</span> Los alpinistas llegarón a lo alto de la <span class="palabra" alt="montana">x</span> .
                        </p>
                        <p>
                        <span class="celeste">●</span> Aquellos estudiantes <span class="palabra" alt="cantaron">x</span> con emoción una canción.
                        </p>
                        <p>
                        <span class="celeste">●</span> El experimentado <span class="palabra" alt="cocinero">x</span> preparó un exquisito plato.
                        </p>
                        <p>
                        <span class="celeste">●</span> La torta de chocolate es uno de mis <span class="palabra" alt="postres">x</span> preferidos.
                        </p>
                        <p>
                        <span class="celeste">●</span> Durante la cena, yo <span class="palabra" alt="converse">x</span> largamente con mis padres.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="montana">montaña</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cantaron">cantaron</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cocinero">cocinero</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="postres">postres</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="converse">conversé</h4>
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
function result_tipo_3_8_7() {
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