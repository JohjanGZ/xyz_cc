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

            <div class="row" style="padding-top: 20px;">

                <div class="col s8">
                    <ul id="tabs-swipe-demo" class="tabs">
                        <li class="tab col s3"><a class="active" href="#test-swipe-1">Part 1</a></li>
                        <li class="tab col s3"><a href="#test-swipe-2">Part 2</a></li>
                        <li class="tab col s3"><a href="#test-swipe-3">Part 3</a></li>
                    </ul>
                </div>

                <div id="test-swipe-1" class="col s8 parrafo">
                    <p>
                        A un hombre muy rico se le enfermó su esposa.
                        <span class="palabra" alt="aparte">
                           x
                        </span>
                        <br>
                        Cuando ella sintió que su fin estaba próximo,
                        llamó a su única hija ante su lecho y le dijo:
                        —Querida hija, sé piadosa y buena, así Dios
                        siempre te ayudará, yo te observaré desde el
                        cielo y velaré por ti.
                        <span class="palabra" alt="aparte">
x
                        </span><br>
                        En seguida cerró los ojos y expiró.
                        <span class="palabra" alt="aparte">
x
                        </span><br>
                    </p>
                </div>
                <div id="test-swipe-2" class="col s8 parrafo">
                    <p>
                        La niña iba todos los días a la tumba de su madre
                        y lloraba y era piadosa y buena.
                        <span class="palabra" alt="seguido">
x
                        </span>
                        Al llegar el invierno, la nieve cubrió con su blanca túnica la
                        tumba, y cuando brilló el sol que derrite
                        la nieve, en primavera, el hombre
                        se casó de nuevo.
                        <span class="palabra" alt="aparte">
                            x
                        </span>
                    </p>
                </div>
                <div id="test-swipe-3" class="col s8 parrafo">
                    <p>
                        La mujer trajo a la casa dos hijas, que
                        eran de facciones bonitas y de tez
                        blanca, pero de corazón duro y
                        negro.
                        <span class="palabra" alt="seguido">
x
                        </span>
                        Transcurrió entonces
                        un periodo muy malo para la pobre hijastra.
                        <span class="palabra" alt="final">
x
                        </span>
                    </p>
                </div>
                <div class="col s4" style="text-align:center;">
                    <img src="<?= $dir ?>/img/1.png" style="width: 150px;margin: auto;text-align: center;" alt="">
                </div>

            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="final">Punto final</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="seguido">Punto seguido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="seguido">Punto seguido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aparte">Punto aparte</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aparte">Punto aparte</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aparte">Punto aparte</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="aparte">Punto aparte</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function(){
    $(".esconder").css("display", "none");
});

// Validar
function result_tipo_2_1_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 7) {
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