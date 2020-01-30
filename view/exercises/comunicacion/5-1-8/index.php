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
                    <span>•</span><div class="contenedor" alt="explica"></div> lo que sucedió de forma clara y <div class="contenedor" alt="puntual"></div>.
                </div>
                <div class="contenedor-check">
                    <div class="option">
                        <div class="pieza" alt="">Explica</div>
                        <span>-</span>
                        <div class="pieza" alt="">pública</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">Relata</div>
                        <span>-</span>
                        <div class="pieza" alt="">precisa</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">Narra</div>
                        <span>-</span>
                        <div class="pieza" alt="">puntual</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="explica">Explica</div>
                        <span>-</span>
                        <div class="pieza" alt="puntual">puntual</div>
                    </div>
                </div>
            </div>
            <div class="oracion">
                <div class="pregunta">
                    <span>•</span><div class="contenedor" alt="menciona"></div> quiénes son los involucrados en los <div class="contenedor" alt="hechos"></div>.
                </div>
                <div class="contenedor-check">
                <div class="option">
                        <div class="pieza" alt="">Explica</div>
                        <span>-</span>
                        <div class="pieza" alt="">hechos</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="menciona">Menciona</div>
                        <span>-</span>
                        <div class="pieza" alt="hechos">hechos</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">Relata</div>
                        <span>-</span>
                        <div class="pieza" alt="">actos</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">Narra</div>
                        <span>-</span>
                        <div class="pieza" alt="">textos</div>
                    </div>
                </div>
            </div>
            <div class="oracion">
                <div class="pregunta">
                    <span>•</span> Describe el <div class="contenedor" alt="lugar"></div> y la <div class="contenedor" alt="fecha"></div>.
                </div>
                <div class="contenedor-check">
                <div class="option">
                        <div class="pieza" alt="lugar">lugar</div>
                        <span>-</span>
                        <div class="pieza" alt="fecha">fecha</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">tema</div>
                        <span>-</span>
                        <div class="pieza" alt="">noticia</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">lugar</div>
                        <span>-</span>
                        <div class="pieza" alt="">noticia</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">tema</div>
                        <span>-</span>
                        <div class="pieza" alt="">fecha</div>
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

function result_tipo_5_1_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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