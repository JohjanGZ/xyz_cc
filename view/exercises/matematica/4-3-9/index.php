<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="grid-tabla">
            <div class="mcm">
                <div class="grid-container">
                    <div class="grid-num bb">
                        <div class="grid-item">14</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">20</div>
                        <div class="grid-item resolver total" alt="2"></div>

                        <div class="grid-item">7</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">10</div>
                        <div class="grid-item resolver total" alt="2"></div>

                        <div class="grid-item">7</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">5</div>
                        <div class="grid-item resolver total" alt="5"></div>

                        <div class="grid-item">7</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">1</div>
                        <div class="grid-item resolver total" alt="7"></div>

                        <div class="grid-item">1</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">1</div>
                        <div class="grid-item"></div>
                    </div>
                </div>
                <p>
                    MCM ( 14; 20 ) =
                    <span class="resolver total" alt="140">

                    </span>
                </p>
            </div>

            <div class="mcm">
                <div class="grid-container">
                    <div class="grid-num bb">
                        <div class="grid-item">25</div>
                        <div class="grid-item">-</div>
                        <div class="grid-item">75</div>
                        <div class="grid-item">3</div>

                        <div class="grid-item resolver total" alt="25"></div>
                        <div class="grid-item">-</div>
                        <div class="grid-item resolver total" alt="25"></div>
                        <div class="grid-item">5</div>

                        <div class="grid-item resolver total" alt="5"></div>
                        <div class="grid-item">-</div>
                        <div class="grid-item resolver total" alt="5"></div>
                        <div class="grid-item">5</div>

                        <div class="grid-item resolver total" alt="1"></div>
                        <div class="grid-item">-</div>
                        <div class="grid-item resolver total" alt="1"></div>
                        <div class="grid-item"></div>

                       
                    </div>
                </div>
                <p>
                    MCM ( 25; 75 ) =
                    <span class="resolver total" alt="75">

                    </span>
                </p>
            </div>

        </div>
        <div id="numeros"></div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_4_3_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    comprobar_operacion_numeros();
    if (r == 12) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>