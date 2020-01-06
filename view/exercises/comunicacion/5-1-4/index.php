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
                            Demos tiempo al tiempo:
                            <span class="palabra contenedor" alt="uno" style="margin-right:0px;">x</span>
                            (de finalidad) el vaso rebose hay que llenarlo primero.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Trajo todos los materiales;
                            <span class="palabra contenedor" alt="dos" style="margin-left:0px;">x</span>
                            , (de equivalencia) los papeles, las tijeras y la goma.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Me pidieron que saliera del cuarto,
                            <span class="palabra contenedor" alt="tres" style="margin-right:0px;">x</span>
                            , (de quivalencia) querían hablar a solas.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Mi madre me matriculó en el taller de verano
                            <span class="palabra contenedor" alt="cuatro" style="margin-right:0px;">x</span>
                            (de finalidad) mejore mi práctica.
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">para que</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">es decir</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tres">o sea</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuatro">a fin de que</h4>
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
function result_tipo_5_1_4() {
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