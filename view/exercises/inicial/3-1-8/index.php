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
            <div class="col m2">
                <div class="lista-option">
                    <div class="pieza" alt="1">1</div>
                    <div class="pieza" alt="2">2</div>
                    <div class="pieza" alt="3">3</div>
                    <div class="pieza" alt="4">4</div>
                    <div class="pieza" alt="5">5</div>
                    <div class="pieza" alt="6">6</div>
                    <div class="pieza" alt="7">7</div>
                    <div class="pieza" alt="8">8</div>
                    <div class="pieza" alt="9">9</div>
                    <div class="pieza" alt="10">10</div>
                </div>
            </div>
            <div class="col m10">
                <div class="campo-image">
                    <img src="<?=$dir?>/img/principal.png" class="principal">
                    <div class="contenedor p1" alt="1"></div>
                    <div class="contenedor p2" alt="3"></div>
                    <div class="contenedor p3" alt="5"></div>
                    <div class="contenedor p4" alt="7"></div>
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

function result_tipo_3_1_8() {
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