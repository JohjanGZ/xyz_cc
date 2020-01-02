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
                            Que se hace fuera del horario laboral:
                            <span class="palabra contenedor" alt="extra">x</span>
                            laboral
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Que todo lo puede:    
                            <span class="palabra contenedor" alt="omni">x</span>
                            potente
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Persona que sufre del alza en su presión arterial:
                            <span class="palabra contenedor" alt="hiper">x</span>
                            tenso
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Persona que se instruye a sí misma:
                            <span class="palabra contenedor" alt="auto">x</span>
                            didacta
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Construcción formada por partes fabricadas previamente:
                            <span class="palabra contenedor" alt="pre">x</span>
                            fabricado
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="extra">Extra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="omni">Omni</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="hiper">Hiper</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="auto">Auto</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pre">Pre</h4>
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
function result_tipo_5_0_9() {
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