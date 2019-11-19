<?php require('../../../tools/var/variables.php'); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="img-principal">
        </center>
        <div class="grid-container">
            <div class="grid-item">5</div>
            <div class="grid-item">
                <div class="caja" alt="n"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>

            <div class="grid-item">4</div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja" alt="n"></div>
            </div>

            <div class="grid-item">3</div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja" alt="n"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>

            <div class="grid-item">2</div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja" alt="n"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>

            <div class="grid-item">1</div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>
            <div class="grid-item">
                <div class="caja" alt="n"></div>
            </div>
            <div class="grid-item">
                <div class="caja"></div>
            </div>

            <div class="grid-item"></div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png" class="img">
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png" class="img">
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png" class="img">
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png" class="img">
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/5.png" class="img">
            </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_1_0_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (r == 5) {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>