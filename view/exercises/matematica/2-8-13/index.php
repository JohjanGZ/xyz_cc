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
        <div class="content aleatorio">
            <div class="respuestas">
                <div class="contresp">
                    <div class="pieza" alt="5 800">5 800</div>
                    <div class="pieza" alt="4 760">4 760</div>
                    <div class="pieza" alt="5 260">5 260</div>
                    <div class="pieza" alt="7 540">7 540</div>
                    <div class="pieza" alt="4 670">4 670</div>
                    <div class="pieza" alt="6 570">6 570</div>
                    <div class="pieza" alt="6 830">6 830</div>
                </div>
            </div>
            <div class="droppables">
                <div class="box contenedor boxuno" alt="7 540"></div>
                <div class="box contenedor boxdos" alt="6 830"></div>
                <div class="box contenedor boxtres" alt="6 570"></div>
                <div class="box contenedor boxcuatro" alt="5 800"></div>
                <div class="box contenedor boxcinco" alt="5 260"></div>
                <div class="box contenedor boxseis" alt="4 760"></div>
                <div class="box contenedor boxsiete" alt="4 670"></div>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_8_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 7) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>