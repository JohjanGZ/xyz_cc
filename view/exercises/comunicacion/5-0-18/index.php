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
                <div class="container-cuento" >
                    <div class="lectura">
                        <p>
                            Los incas no eran un grupo étnico natural del Cusco, esta región sería después su área
                            central, se trataba de una población que emigró aproximadamente en el año 1100 d. C.,
                            probablemente desde el Altiplano hacia el valle de Cusco, donde durante casi trescientos
                            años llevaron a cabo incursiones y alianzas con los pueblos de la zona.
                        </p>
                        <p>
                            Con el transcurrir del tiempo, se convirtieron en un grupo muy poderoso e importante; sin
                            embargo, permanecieron en la región hasta la invasión chanca y el gobierno de Pachacutec
                            Inca Yupanqui, cuando empezaron a expandirse por otras regiones.
                        </p>
                    </div>

                </div>
            </div>
            <div id="test-swipe-2" class="col s12 lectura-img">
                <div class="contenedor-oraciones">

                    <div class="oracion">
                        <h5>
                            <span>•</span> La idea principal es "Los incas se expandieron por otras regiones".
                        </h5>
                        <div class="contenedor-check">

                            <div class="respuesta seleccion" alt="n">
                                <span>Falso</span>
                            </div>
                            <div class="respuesta seleccion" alt="x">
                                <span>Verdadero</span>
                            </div>
                        </div>

                    </div>

                    <div class="oracion">
                        <h5>
                            <span>•</span> La idea principal es "Los incas eran una población de emigrantes".
                        </h5>
                        <div class="contenedor-check">

                            <div class="respuesta seleccion" alt="x">
                                <span>Falso</span>
                            </div>
                            <div class="respuesta seleccion" alt="n">
                                <span>Verdadero</span>
                            </div>
                        </div>

                    </div>
                    <div class="oracion">
                        <h5>
                            <span>•</span> Una idea secundaria es "Los incas se convirtieron en un grupo violento".
                        </h5>
                        <div class="contenedor-check">

                            <div class="respuesta seleccion" alt="n">
                                <span>Falso</span>
                            </div>
                            <div class="respuesta seleccion" alt="x">
                                <span>Verdadero</span>
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
function result_tipo_5_0_18() {
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