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
                            <span class="palabra" alt="mamifero">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/2.png" alt=""> </span>
                            <span class="palabra" alt="rios">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/3.png" alt=""> </span>
                            <span class="palabra" alt="huesos">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/4.png" alt=""> </span>
                            <span class="palabra" alt="verbos">x</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="span-img"><img src="<?= $dir ?>/img/5.png" alt=""> </span>
                            <span class="palabra" alt="musica">x</span>
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="mamifero">vaca</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mamifero">gato</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mamifero">perro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rios">Amazonas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rios">Nilo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rios">Misisipi</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="huesos">peroné</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="huesos">clavícula</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="huesos">coracoide</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="verbos">correr</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="verbos">saltar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="verbos">cantar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="musica">rock</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="musica">pop</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="musica">regueton</h4>
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
function result_tipo_3_6_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 15) {
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