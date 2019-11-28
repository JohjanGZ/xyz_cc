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
            <div class="col s12">
                <ul id="tabs-swipe-demo" class="tabs">
                    <li class="tab col s3 activo"><a class="active" href="#test-swipe-1">Parte 1</a></li>
                    <li class="tab col s3"><a href="#test-swipe-2">Parte 2</a></li>
                </ul>
            </div>
            <div id="test-swipe-1" class="col s12 lectura-img">
                <div class="lectura-x">
                    <div class="contenedor-lectura">
                        <h5>La trompeta de la alegría</h5>
                        <p>
                            En un país muy lejano había una trompeta mágica cuyas notas resonaban por todas partes y
                            que, al
                            escucharlas, brindaban paz, felicidad y alegría para todos.
                            Un día la trompeta desapareció y todos los ciudadanos estaban muy tristes.
                        </p>
                        <p>
                            Nadie hizo nada, solo una pequeña niña marchó con su familia decidida a encontrar la
                            trompeta.
                        </p>
                        <p>
                            Preguntaron por todas partes hasta que conocieron al sabio de las montañas. Este les contó
                            que
                            la
                            trompeta estaba en el pozo de las sombras y les regaló un violín.
                            Caminaron hasta que llegaron al pozo, donde encontraron algunos músicos que tocaban melodías
                            muy
                            tristes.
                        </p>
                    </div>
                    <div class="contenedor-imagen">
                        <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
                    </div>
                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="lectura-x">
                    <div class="contenedor-lectura">
                        <h5>La trompeta de la alegría</h5>
                        <p>
                            La niña se unió a tocar pero, al oír aquella música tristona, se dio cuenta de que la
                            trompeta
                            jamás querría salir del pozo. Así que comenzó a tocar la música más feliz que pudo, sin
                            descanso, hasta animar a los músicos.
                        </p>
                        <p>
                            Todos juntos alegraron tanto el lugar que la misma trompeta salió más emocionada que nunca y
                            llevó de nuevo la alegría a todo el país.La niña comprendió el valor de la música como el
                            remedio contra la tristeza. Y, desde entonces, en aquel país, a toda persona que se
                            encuentra
                            triste se le dedica un poco de música alegre. ¡Todo el mundo realiza su quehacer con alegría
                            y
                            felicidad!
                        </p>
                    </div>
                    <div class="contenedor-imagen">
                        <img src="<?= $dir ?>/img/2.png" class="materialboxed" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});
</script>

<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript">
$(".btn-intentos").hide();
$(".btnEnviar").hide();
$(".btnCorregir").hide();
$(".btnSiguiente").removeClass("disabled");
</script>