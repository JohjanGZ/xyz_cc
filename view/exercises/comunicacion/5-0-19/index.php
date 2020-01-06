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
                <div class="container-cuento">
                    <div class="lectura">
                        <p>
                            En la antigua Grecia, los vencedores de los Juegos Olímpicos eran tratados como héroes en
                            sus pueblos de origen. Ellos recibían una corona hecha de olivo que posteriormente fue
                            sustituida por la de laurel. Estos atletas recibían grandes honores: se les representaba en
                            estatuas, los poetas escribían versos para inmortalizar sus hazañas; además, vivían el resto
                            de sus vidas con ayuda económica de los dirigentes de sus ciudades.
                        </p>
                    </div>

                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="contenedor-oraciones">

                    <div class="oracion">
                        <h5>
                            <span>•</span> ¿Cuál es la idea principal del texto?
                        </h5>
                        <div class="contenedor-check">
                            <div class="respuesta seleccion" alt="n">
                                <span>Los vencedores de los Juegos Olímpicos eran tratados como héroes en la antigua Grecia.</span>
                            </div>
                            <div class="respuesta seleccion" alt="x">
                                <span>En la antigua Grecia se realizaban los Juegos Olímpicos y se premiaba a los vencedores.</span>
                            </div>
                            <div class="respuesta seleccion" alt="x">
                                <span>Los atletas recibían grandes honores, como vivir sus vidas con ayuda económica.</span>
                            </div>
                        </div>
                    </div>

                </div>
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

var r = 0;
$(document).ready(function() {
    $('.tabs').tabs();
});

$(".tab").click(function() {
    $(this).addClass("activo");
});

function result_tipo_5_0_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 1) {
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