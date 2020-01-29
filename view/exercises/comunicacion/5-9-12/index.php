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
                    <div class="contenedor-check">
                        <div class="pieza" alt="Los">Los</div>
                        <div class="pieza" alt="viajeros">viajeros</div>
                        <div class="pieza" alt="comieron">comieron</div>
                        <div class="pieza" alt="un">un</div>
                        <div class="pieza" alt="plato">plato</div>
                        <div class="pieza" alt="tipico">típico</div>
                    </div>
                    <div class="d-flex">
                        <span>•</span>
                        <div class="contenedor" alt="Los"></div>
                        <div class="contenedor" alt="viajeros"></div>
                        <div class="contenedor" alt="comieron"></div>
                        <div class="contenedor" alt="un"></div>
                        <div class="contenedor" alt="plato"></div>
                        <div class="contenedor" alt="tipico"></div>
                        .
                    </div>
                </div>
                <div class="pregunta">
                    <div class="contenedor-check">
                        <div class="pieza" alt="Mi">Mi</div>
                        <div class="pieza" alt="hermana">hermana</div>
                        <div class="pieza" alt="diseñó">diseñó</div>
                        <div class="pieza" alt="un">un</div>
                        <div class="pieza" alt="trasbordador">trasbordador</div>
                        <div class="pieza" alt="espacial">espacial</div>
                        <div class="pieza" alt="con">con</div>
                        <div class="pieza" alt="fosforos">fósforos</div>
                    </div>
                    <div class="d-flex">
                        <span>•</span>
                        <div class="contenedor" alt="Mi"></div>
                        <div class="contenedor" alt="hermana"></div>
                        <div class="contenedor" alt="diseñó"></div>
                        <div class="contenedor" alt="un"></div>
                        <div class="contenedor" alt="trasbordador"></div>
                        <div class="contenedor" alt="espacial"></div>
                        <div class="contenedor" alt="con"></div>
                        <div class="contenedor" alt="fosforos"></div>
                        .
                    </div>
                </div>
                <div class="pregunta">
                    <div class="contenedor-check">
                        <div class="pieza" alt="La">La</div>
                        <div class="pieza" alt="profesora">profesora</div>
                        <div class="pieza" alt="nos">nos</div>
                        <div class="pieza" alt="explico">explicó</div>
                        <div class="pieza" alt="los">los</div>
                        <div class="pieza" alt="ejercicios">ejercicios</div>
                        <div class="pieza" alt="pacientemente">pacientemente</div>
                    </div>
                    <div class="d-flex">
                        <span>•</span>
                        <div class="contenedor" alt="La"></div>
                        <div class="contenedor" alt="profesora"></div>
                        <div class="contenedor" alt="nos"></div>
                        <div class="contenedor" alt="explico"></div>
                        <div class="contenedor" alt="los"></div>
                        <div class="contenedor" alt="ejercicios"></div>
                        <div class="contenedor" alt="pacientemente"></div>
                        .
                    </div>
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

function result_tipo_5_9_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 21) {
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