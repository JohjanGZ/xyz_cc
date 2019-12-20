<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-ejercicios">
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <p>
                            En la <span class="palabra contenedor" alt="charca">x</span> croaba <br>
                            una pequeña <span class="palabra contenedor" alt="rana">x</span>. <br>
                            De pronto, se acercó al <br>
                            trote un bonito <span class="palabra contenedor" alt="caballo">x</span> <br>
                            con ganas de beber <br>
                            y una <span class="palabra contenedor" alt="mariposa">x</span> que <br>
                            volaba por allí se asustó y se fue.
                        </p>
                    </div>
                </div>

            </div>
            <div class="contenedor-imagen">
                <div class="imagen">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
                <ul class="contenedor-silabas">
                    <li class="silabas">
                        <h4 class="pieza" alt="charca">charca</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="rana">rana</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="caballo">caballo</h4>
                    </li>
                    <li class="silabas">
                        <h4 class="pieza" alt="mariposa">mariposa</h4>
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
function result_tipo_4_1_21() {
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