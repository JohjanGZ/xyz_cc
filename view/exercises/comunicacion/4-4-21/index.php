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
                            <span class="celeste">●</span>
                            Es la chica
                            <span class="palabra contenedor" alt="uno">x</span>
                            bailó con Carlos.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            De él es
                            <span class="palabra contenedor" alt="dos">x</span>
                            hablamos.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Se veía una plazoleta en
                            <span class="palabra contenedor" alt="tres">x</span>
                            bailaba gente.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Él es el amigo 
                            <span class="palabra contenedor" alt="cuatro">x</span>
                            casa conozco.
                        </p>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">que</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">de quién</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">la cual</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">cuya</h4>
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
function result_tipo_4_4_21() {
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