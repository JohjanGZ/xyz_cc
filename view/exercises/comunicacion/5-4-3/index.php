<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="content">
            <div class="cajas">
                <div class="pieza item" alt="1"><img src="<?=$dir?>/img/1.png"></div>
                <div class="pieza item" alt="2"><img src="<?=$dir?>/img/2.png"></div>
                <div class="pieza item" alt="3"><img src="<?=$dir?>/img/3.png"></div>
                <div class="pieza item" alt="4"><img src="<?=$dir?>/img/4.png"></div>
                <div class="pieza item" alt="5"><img src="<?=$dir?>/img/5.png"></div>
                <div class="pieza item" alt="6"><img src="<?=$dir?>/img/6.png"></div>
            </div>
            <div class="image">
                <div class="box box1 contenedor" alt="6"></div>
                <div class="box box2 contenedor" alt="5"></div>
                <div class="box box3 contenedor" alt="4"></div>
                <div class="box box4 contenedor" alt="3"></div>
                <div class="box box5 contenedor" alt="2"></div>
                <div class="box box6 contenedor" alt="1"></div>
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

function result_tipo_5_4_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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