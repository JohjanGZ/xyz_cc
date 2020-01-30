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
                    <div class="d-flex">
                        <span>•</span> El cuadro resumen es un <div class="contenedor" alt="esquema"></div> u
                        organizador <div class="contenedor" alt="grafico"></div> que presenta
                    </div>
                    <div class="d-flex">
                        la información de manera <div class="contenedor" alt="abreviada"></div>.
                    </div>
                </div>
                <div class="contenedor-check">
                    <div class="option">
                        <div class="pieza" alt="">esquema</div>
                        <span>-</span>
                        <div class="pieza" alt="">dibujado</div>
                        <span>-</span>
                        <div class="pieza" alt="">sintética</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">dibujo</div>
                        <span>-</span>
                        <div class="pieza" alt="">gráfico</div>
                        <span>-</span>
                        <div class="pieza" alt="">resumida</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="esquema">esquema</div>
                        <span>-</span>
                        <div class="pieza" alt="grafico">gráfico</div>
                        <span>-</span>
                        <div class="pieza" alt="abreviada">abreviada</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">dibujo</div>
                        <span>-</span>
                        <div class="pieza" alt="">gráfico</div>
                        <span>-</span>
                        <div class="pieza" alt="">abreviada</div>
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

function result_tipo_5_3_4() {
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