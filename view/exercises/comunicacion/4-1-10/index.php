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
                        <div class="contenedor-imagen">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="palabra contenedor" alt="uno">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="contenedor-imagen">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="palabra contenedor" alt="dos">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <div class="contenedor-imagen">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                        <div class="palabra contenedor" alt="tres">

                        </div>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas uno">
                        <li class="silabas">
                            <h4 class="pieza" alt="uno">rompe</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="uno">cabezas</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="dos">saca</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="dos">corchos</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="tres">gira</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="tres">sol</h4>
                        </li>
                    </ul>
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
function result_tipo_4_1_10() {
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