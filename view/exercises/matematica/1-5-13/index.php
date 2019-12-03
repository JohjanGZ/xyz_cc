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
        <div class="row svg">

            <div class="campo" id="imgIzquierda">

                <ul id="listA">
                    <li alt="1" class="a" id="obj1">
                        <center><img src="<?= $dir ?>/img/1.png"></center>
                    </li>
                    <li alt="2" class="a" id="obj2">
                        <center><img src="<?= $dir ?>/img/2.png"></center>
                    </li>
                    <li alt="3" class="a" id="obj3">
                        <center><img src="<?= $dir ?>/img/3.png"></center>
                    </li>
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="95px" width="510px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                    <li alt="3" class="b c1" id="obj6">
                        <center>291</center>
                    </li>
                    <li alt="1" class="b c2" id="obj7">
                        <center>107</center>
                    </li>
                    <li alt="2" class="b c3" id="obj8">
                        <center>368</center>
                    </li>
                </ul>
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
function result_tipo_1_5_13() {
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