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
        <div class="grid-container">
            <div class="grid-item">
                <div class="item">6</div>
                <div class="item">5</div>
                <div class="item">4</div>
                <div class="item">8</div>
                <div class="item bl">3</div>
                <div class="item bb">5</div>
                <div class="item bb"></div>

                <div class="total" alt="3"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="4"></div>
                <div class="item"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="8"></div>
                <div class="total" alt="7"></div>

                <div class="total" alt="0"></div>
                <div class="total" alt="2"></div>
                <div class="total" alt="4"></div>
                <div class="total" alt="8"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>

                <div class="item"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="3"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>

            <div class="grid-item">
                <div class="item">1</div>
                <div class="item">7</div>
                <div class="item">3</div>
                <div class="item">4</div>
                <div class="item bl">1</div>
                <div class="item bb">5</div>
                <div class="item bb"></div>

                <div class="total" alt="0"></div>
                <div class="total" alt="2"></div>
                <div class="total" alt="3"></div>
                <div class="item"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="5"></div>

                <div class="item"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="8"></div>
                <div class="total" alt="4"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>

                <div class="item"></div>
                <div class="item"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="9"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>

            <div class="grid-item">
                <div class="item">6</div>
                <div class="item">4</div>
                <div class="item">3</div>
                <div class="item">9</div>
                <div class="item bl">4</div>
                <div class="item bb">3</div>
                <div class="item bb"></div>

                <div class="total" alt="2"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="3"></div>
                <div class="item"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="4"></div>
                <div class="total" alt="9"></div>

                <div class="total" alt="0"></div>
                <div class="total" alt="4"></div>
                <div class="total" alt="1"></div>
                <div class="total" alt="9"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>

                <div class="item"></div>
                <div class="total" alt="0"></div>
                <div class="total" alt="3"></div>
                <div class="total" alt="2"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_5_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    if (r == 37) {
        correcto();
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);

    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>