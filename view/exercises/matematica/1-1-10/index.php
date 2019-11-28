<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="caja-principal">
        <div class="center">
            <div id="contenedorPiezas">
                <ul id="listA">
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="5" src="<?= $dir ?>/img/1.png" alt="pieza1">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="7" src="<?= $dir ?>/img/2.png" alt="pieza2">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="8" src="<?= $dir ?>/img/3.png" alt="pieza3">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="9" src="<?= $dir ?>/img/4.png" alt="pieza4">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="4" src="<?= $dir ?>/img/5.png" alt="pieza5">
                        </div>
                    </li>
                    <li>
                        <div class="box">
                            <img class="pieza responsive-img" alt="6" src="<?= $dir ?>/img/6.png" alt="pieza6">
                        </div>
                    </li>
                </ul>
            </div>
            <div class="row recibidor" id="recibidor">
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="4"><label class="title">4</label></div>
                </div>
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="5"><label class="title">5</label></div>
                </div>
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="6"><label class="title">6</label></div>
                </div>
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="7"><label class="title">7</label></div>
                </div>
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="8"><label class="title">8</label></div>
                </div>
                <div class="col s12 m4 l4 xl4">
                    <div class="contenedorPieza" id="9"><label class="title">9</label></div>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar

function result_tipo_1_1_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (n4 == 1 && n5 == 1 && n6 == 1 && n7 == 1 && n8 == 1 && n9 == 1) {
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