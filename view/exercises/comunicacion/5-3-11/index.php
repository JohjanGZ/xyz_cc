<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="contenedor-oraciones">
            <div class="oracion">
                <div class="pregunta">
                    <div class="d-flex"><span>•</span> La mitad de los electores no saben por quién va a votar. <div class="contenedor" alt="fraccionarios"></div>.</div>
                    <div class="d-flex"><span>•</span> Fuimos a la playa y nos sentamos a veinte metros de la orilla. <div class="contenedor" alt="numerales"></div>.</div>
                    <div class="d-flex"><span>•</span> Le propuso una doble apuesta, pero el jugador la rechazó. <div class="contenedor" alt="multiplos"></div>.</div>
                    <div class="d-flex"><span>•</span> A pesar de su esfuerzo el maratonista llegó en tercer lugar. <div class="contenedor" alt="ordinales"></div>.</div>
                    <div class="d-flex"><span>•</span> Mi colegio tiene dos áreas deportivas para primaria y secundaria. <div class="contenedor" alt="cardinales"></div>.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="numerales">Numerales</div>
                    <div class="pieza" alt="cardinales">Cardinales</div>
                    <div class="pieza" alt="ordinales">Ordinales</div>
                    <div class="pieza" alt="multiplos">Múltiplos</div>
                    <div class="pieza" alt="fraccionarios">Fraccionarios</div>
                </div>
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

function result_tipo_5_3_11() {
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