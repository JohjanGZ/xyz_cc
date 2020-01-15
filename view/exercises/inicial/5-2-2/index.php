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
        <div class="options">
            <div class="content">
                <div class="item pieza" alt="e">
                    <img src="<?= $dir ?>/img/2">
                </div>
                <div class="item pieza" alt="c">
                    <img src="<?= $dir ?>/img/3">
                </div>
                <div class="item pieza" alt="h">
                    <img src="<?= $dir ?>/img/4" >
                </div>
                <div class="item pieza" alt="p">
                    <img src="<?= $dir ?>/img/5" >
                </div>
            </div>
        </div>
        <div class="image">
        <div class="box boxuno contenedor" alt="p"></div>
        <div class="box boxdos contenedor" alt="c"></div>
        <div class="box boxtres contenedor" alt="e"></div>
        <div class="box boxcuatro contenedor" alt="h"></div>
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar


function result_tipo_5_2_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>