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
        <div class="row">
            <div class="col l6">
                <div class="grid-tabla">
                    <div class="grid-container">
                        <div class="grid-num">
                            <div class="text"><span class="ms">•</span>Carla reparte en partes iguales 24 gelatinas
                                entre 5 cajitas. ¿Cuántas gelatinas se colocarán en cada caja?</div>
                            <div class="clr">Resolución:</div>
                        </div>
                        <div class="grid-item">
                            <div class="grid-res">
                                <span class="res-text"><span class="ms">•</span>Dividendo:</span>
                                <div class="total" alt="2"></div>
                                <div class="total" alt="4"></div>
                            </div>
                            <div class="grid-res">
                                <span class="res-text"><span class="ms">•</span>Divisor:</span>
                                <div class="total" alt="5"></div>
                            </div>
                            <div class="grid-res">
                                <span class="res-text"><span class="ms">•</span>Cociente:</span>
                                <div class="total" alt="4"></div>
                            </div>
                            <div class="grid-res">
                                <span class="res-text"><span class="ms">•</span>Residuo:</span>
                                <div class="total" alt="4"></div>
                            </div>
                        </div>
                        <div class="grid-num">
                            <div class="clr">Resolución:</div>
                            <div class="grid-res">
                                <span class="ms">•</span>En cada caja se colocarán <div class="total" alt="4"></div> gelatinas.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col l6">
                <div class="img-center">
                    <img src="<?=$dir?>/img/principal.png" class="img">
                </div>
            <div id="numeros"></div>
            </div>
        </div>
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
function result_tipo_3_4_13() {
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
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>