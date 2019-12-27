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
                            <span class="palabra contenedor" alt="yo">x</span>
                            trabajo como recepcionista en una oficina.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra contenedor" alt="ellas">x</span>
                            están muy contentas con el resultado del examen.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            A veces
                            <span class="palabra contenedor" alt="nosotros">x</span>
                            cenamos una tortilla.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            ¿
                            <span class="palabra contenedor" alt="ustedes">x</span>
                            en qué hotel estáis alojados?
                        </p>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="yo">Yo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ellas">Ellas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="nosotros">nosotros</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ustedes">Ustedes</h4>
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
function result_tipo_4_4_19() {
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