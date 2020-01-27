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
                    <span>•</span> Es <div class="contenedor" alt="espontaneo"></div>, familiar y <div class="contenedor" alt="expresivo"></div>.
                </div>
                <div class="contenedor-check">
                    <div class="option">
                        <div class="pieza" alt="espontaneo">espontáneo</div>
                        <span>-</span>
                        <div class="pieza" alt="expresivo">expresivo</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">activo</div>
                        <span>-</span>
                        <div class="pieza" alt="">sigiloso</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">privado</div>
                        <span>-</span>
                        <div class="pieza" alt="">tácito</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">vivo</div>
                        <span>-</span>
                        <div class="pieza" alt="">callado</div>
                    </div>
                </div>
            </div>
            <div class="oracion">
                <div class="pregunta">
                    <span>•</span> Se utilizan <div class="contenedor" alt="gestos"></div>, <div class="contenedor" alt="mimicas"></div> y tono de
                    voz.
                </div>
                <div class="contenedor-check">
                <div class="option">
                        <div class="pieza" alt="">gestos</div>
                        <span>-</span>
                        <div class="pieza" alt="">palabras</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">movimientos</div>
                        <span>-</span>
                        <div class="pieza" alt="">palabras</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">gestos</div>
                        <span>-</span>
                        <div class="pieza" alt="">movimientos</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="gestos">gestos</div>
                        <span>-</span>
                        <div class="pieza" alt="mimicas">mímicas</div>
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

function result_tipo_5_0_5() {
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