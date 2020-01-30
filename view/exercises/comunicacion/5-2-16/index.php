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
                    <span>•</span> Los propósitos comunicativos de un folleto son <div class="contenedor" alt="informar"></div>,
                    <div class="contenedor" alt="entretener"></div> y <div class="contenedor" alt="persuadir"></div>.
                </div>
                <div class="contenedor-check">
                    <div class="option">
                        <div class="pieza" alt="">informar</div>
                        <span>-</span>
                        <div class="pieza" alt="">divertir</div>
                        <span>-</span>
                        <div class="pieza" alt="">convencer</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">entretener</div>
                        <span>-</span>
                        <div class="pieza" alt="">convencer</div>
                        <span>-</span>
                        <div class="pieza" alt="">persuadir</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="">entretener</div>
                        <span>-</span>
                        <div class="pieza" alt="">divertir</div>
                        <span>-</span>
                        <div class="pieza" alt="">jugar</div>
                    </div>
                    <div class="option">
                        <div class="pieza" alt="informar">informar</div>
                        <span>-</span>
                        <div class="pieza" alt="entretener">entretener</div>
                        <span>-</span>
                        <div class="pieza" alt="persuadir">persuadir</div>
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

function result_tipo_5_2_16() {
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