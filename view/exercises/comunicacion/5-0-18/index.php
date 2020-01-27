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
                    <span>•</span> Reduce el <div class="contenedor" alt="estres"></div>.
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="">trabajo</div>
                    <div class="pieza" alt="">tensión</div>
                    <div class="pieza" alt="">cansancio</div>
                    <div class="pieza" alt="estres">estrés</div>
                </div>
            </div>
            <div class="oracion">
                <div class="pregunta">
                    <span>•</span> Aumenta tu <div class="contenedor" alt="creatividad"></div>.
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="">alegría</div>
                    <div class="pieza" alt="creatividad">creatividad</div>
                    <div class="pieza" alt="">confianza</div>
                    <div class="pieza" alt="">honestidad</div>
                </div>
            </div>
            <div class="oracion">
                <div class="pregunta">
                    <span>•</span> Mejora tu <div class="contenedor" alt="fluidez"></div> verbal.
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="">rapidez</div>
                    <div class="pieza" alt="fluidez">fluidez</div>
                    <div class="pieza" alt="">capacidad</div>
                    <div class="pieza" alt="">razonamiento</div>
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

function result_tipo_5_0_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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