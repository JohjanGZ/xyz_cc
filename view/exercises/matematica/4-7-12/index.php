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
        <div class="column">
            <div class="option">
                <img src="<?=$dir?>/img/1.png" class="img pieza" alt="2">
                <img src="<?=$dir?>/img/2.png" class="img pieza" alt="3">
                <img src="<?=$dir?>/img/3.png" class="img pieza" alt="4">
                <img src="<?=$dir?>/img/4.png" class="img pieza" alt="1">
            </div>
            <div class="grid">
                <div class="item h">Poliedro</div>
                <div class="item h">n° caras</div>
                <div class="item h">n° vértices</div>
                <div class="item h">n° aristas</div>

                <div class="item"><div class="contenedor" alt="1"></div></div>
                <div class="item">6</div>
                <div class="item">6</div>
                <div class="item">10</div>

                <div class="item"><div class="contenedor" alt="2"></div></div>
                <div class="item">5</div>
                <div class="item">6</div>
                <div class="item">9</div>

                <div class="item"><div class="contenedor" alt="3"></div></div>
                <div class="item">5</div>
                <div class="item">5</div>
                <div class="item">8</div>

                <div class="item"><div class="contenedor" alt="4"></div></div>
                <div class="item">6</div>
                <div class="item">8</div>
                <div class="item">12</div>
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
function result_tipo_4_7_12() {
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
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>