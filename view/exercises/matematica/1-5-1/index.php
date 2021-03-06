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
                    <li alt="4" class="a" id="obj1">
                        <center><img src="<?= $dir ?>/img/5.png"></center>
                    </li>
                    <li alt="5" class="a" id="obj2">
                        <center><img src="<?= $dir ?>/img/8.png"></center>
                    </li>
                </ul>

            </div>
            <div class="campo" id="centro">
                <canvas height="105px" width="850px" id="micanvas"></canvas>
            </div>
            <div class="campo" id="imgDerecha">
                <ul id="listB">
                    <li alt="1" class="b" id="obj6">
                        <center>7 centenas</center>
                    </li>
                    <li alt="2" class="b" id="obj7">
                        <center>3 centenas</center>
                    </li>
                    <li alt="3" class="b" id="obj8">
                        <center>4 centenas</center>
                    </li>
                    <li alt="4" class="b" id="obj6">
                        <center>2 centenas</center>
                    </li>
                    <li alt="5" class="b" id="obj7">
                        <center>9 centenas</center>
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
function result_tipo_1_5_1() {
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