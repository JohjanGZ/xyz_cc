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
            <div class="columna">
                <div class="grid-item bn"></div>
                <div class="grid-item bn"><img src="<?= $dir ?>/img/1.png" class="img mr"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator bl" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator" alt="n"></div>
                <div class="grid-item indicator br" alt="n"></div>
                <div class="grid-item indicator"></div>
                <div class="grid-item indicator"></div>
            </div>
            <div class="columna">
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"><img src="<?= $dir ?>/img/2.png" class="img ml"></div>
                <div class="grid-item bn"></div>
                <div class="grid-item bn"></div>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_0_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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