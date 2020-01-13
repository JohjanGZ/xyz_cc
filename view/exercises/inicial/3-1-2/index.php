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
            <div class="col l12">
                <div class="option">
                    <img src="<?=$dir?>/img/1.png" alt="1" class="pieza">
                    <img src="<?=$dir?>/img/2.png" alt="1" class="pieza">
                    <img src="<?=$dir?>/img/3.png" alt="2" class="pieza">
                    <img src="<?=$dir?>/img/4.png" alt="2" class="pieza">
                    <img src="<?=$dir?>/img/5.png" alt="1" class="pieza">
                    <img src="<?=$dir?>/img/6.png" alt="2" class="pieza">
                </div>
            </div>
            <div class="col l12">
                <div class="row">
                    <div class="col l6">
                        <div class="contenedor" alt="1"><h6>Juguetes</h6></div>
                    </div>
                    <div class="col l6">
                        <div class="contenedor" alt="2"><h6>Frutas</h6></div>
                    </div>
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

function result_tipo_3_1_2() {
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
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>