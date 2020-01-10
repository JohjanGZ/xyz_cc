<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="campo" id="palabras">
            <ul id="listA">
                <li class="a">
                    <div class="tabla">
                        <img src="<?= $dir ?>/img/uno.png" class="img">
                    </div>
                </li>
                <li class="a" alt="n">
                    <div class="tabla" >
                        <img src="<?= $dir ?>/img/dos.png" class="img">
                    </div>
                </li>
                <li class="a">
                    <div class="tabla">
                        <img src="<?= $dir ?>/img/tres.png" class="img">
                    </div>
                </li>
                <li class="a" alt="n">
                    <div class="tabla">
                        <img src="<?= $dir ?>/img/cuatro.png" class="img">
                    </div>
                </li>
                <li class="a" alt="n">
                    <div class="tabla">
                        <img src="<?= $dir ?>/img/cinco.png" class="img">
                    </div>
                </li>
                <li class="a">
                    <div class="tabla">
                        <img src="<?= $dir ?>/img/seis.png" class="img">
                    </div>
                </li>
            </ul>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados

function result_tipo_2_4_5() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>