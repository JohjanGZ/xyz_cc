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
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/1.png" alt=""> </span>
                            <span class="palabra" alt="afectivo">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/2.png" alt=""> </span>
                            <span class="palabra" alt="defensivo">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/3.png" alt=""> </span>
                            <span class="palabra" alt="reproductivo">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/4.png" alt=""> </span>
                            <span class="palabra" alt="explosivo">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/5.png" alt=""> </span>
                            <span class="palabra" alt="vengativo">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/6.png" alt=""> </span>
                            <span class="palabra" alt="adhesivo">x</span>
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="afectivo">afectivo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="defensivo">defensivo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="reproductivo">reproductivo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="explosivo">explosivo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="vengativo">vengativo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="adhesivo">adhesivo</h4>
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
function result_tipo_3_6_16() {
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