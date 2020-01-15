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
            <div class="grid-container">
                <div class="grid-num">
                    <div class="text"><span class="ms">•</span>División:</div>
                    <div class="text">29 <span class="ms">÷</span>9</div>
                    <div class="text"><span class="ms">•</span>Comprueba:</div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="9"></div>
                    <span class="ms">x</span>
                    <div class="total" alt="3"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="2"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="2"></div>
                    <div class="total" alt="9"></div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="2"></div>
                    <div class="total" alt="7"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="2"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="2"></div>
                    <div class="total" alt="9"></div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-num">
                    <div class="text"><span class="ms">•</span>División:</div>
                    <div class="text">33 <span class="ms">÷</span>6</div>
                    <div class="text"><span class="ms">•</span>Comprueba:</div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="6"></div>
                    <span class="ms">x</span>
                    <div class="total" alt="5"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="3"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="3"></div>
                    <div class="total" alt="3"></div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="3"></div>
                    <div class="total" alt="0"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="3"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="3"></div>
                    <div class="total" alt="3"></div>
                </div>
            </div>
            <div class="grid-container">
                <div class="grid-num">
                    <div class="text"><span class="ms">•</span>División:</div>
                    <div class="text">26 <span class="ms">÷</span>4</div>
                    <div class="text"><span class="ms">•</span>Comprueba:</div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="6"></div>
                    <span class="ms">x</span>
                    <div class="total" alt="4"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="2"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="2"></div>
                    <div class="total" alt="6"></div>
                </div>
                <div class="grid-item">
                    <div class="total" alt="2"></div>
                    <div class="total" alt="4"></div>
                    <span class="ms">+</span>
                    <div class="total" alt="2"></div>
                    <span class="ms">=</span>
                    <div class="total" alt="2"></div>
                    <div class="total" alt="6"></div>
                </div>
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
function result_tipo_3_1_21() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 30) {
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