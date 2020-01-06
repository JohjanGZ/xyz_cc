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
                            Mi abuela materna,
                            <span class="palabra contenedor" alt="uno" style="margin-right:0px;">x</span>
                            , la madre de mi mamá, nos visitó.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            La profesora de Comunicación,
                            <span class="palabra contenedor" alt="dos" style="margin-left:0px;">x</span>
                            , la señora Susana, corrige las pruebas rápido.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Cuando Ramón y Julián,
                            <span class="palabra contenedor" alt="tres" style="margin-right:0px;">x</span>
                            , mis hermanos pequeños lloran, no los ignoro.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Un hombre zafio,
                            <span class="palabra contenedor xx" alt="cuatro" style="margin-right:0px;">x</span>
                            , un hombre grosero, no es aceptado en ninguna parte.
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">o sea</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">vale decir</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">es decir</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">en otras palabras</h4>
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
function result_tipo_5_1_6() {
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