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
            <div class="col s12">
                <img src="<?= $dir ?>/img/principal.png" class="img">
            </div>
        </div>
        <div class="grid-container">
            <div class="grid-item">
                <img src="<?= $dir ?>/img/1.png">
                <div class="opciones">
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/pertenece.png">
                        <div class="caja after" alt="n"></div>
                    </div>
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/nopertenece.png">
                        <div class="caja after"></div>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/2.png">
                <div class="opciones">
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/pertenece.png">
                        <div class="caja after"></div>
                    </div>
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/nopertenece.png">
                        <div class="caja after" alt="n"></div>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/3.png">
                <div class="opciones">
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/pertenece.png">
                        <div class="caja after"></div>
                    </div>
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/nopertenece.png">
                        <div class="caja after" alt="n"></div>
                    </div>
                </div>
            </div>
            <div class="grid-item">
                <img src="<?= $dir ?>/img/4.png">
                <div class="opciones">
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/pertenece.png">
                        <div class="caja after" alt="n"></div>
                    </div>
                    <div class="box-opcion">
                        <img src="<?= $dir ?>/img/nopertenece.png">
                        <div class="caja after"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_1_0_24() {
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