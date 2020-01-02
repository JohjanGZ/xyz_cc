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
                            Me
                            <span class="palabra contenedor" alt="entre" style="margin-right:0px;">x</span>
                            tengo mucho cuando mi sombre me 
                            <span class="palabra contenedor" alt="per" style="margin-right:0px;">x</span>
                            sigue.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            En el mundo
                            <span class="palabra contenedor" alt="sub" style="margin-left:0px;">x</span>
                            marino se conocen cosas
                            <span class="palabra contenedor" alt="extra">x</span>
                            ordinarias.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Te
                            <span class="palabra contenedor" alt="pre" style="margin-right:0px;">x</span>
                            vengo que soy casi 
                            <span class="palabra contenedor" alt="in" style="margin-right:0px;">x</span>
                            vencible en este juego.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Para
                            <span class="palabra contenedor" alt="im" style="margin-right:0px;">x</span>
                            portar carga pesada se
                            <span class="palabra contenedor" alt="re" style="margin-right:0px;">x</span>
                            quiere un camión.
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="entre">entre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="per">per</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sub">sub</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="extra">extra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pre">pre</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="in">in</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="im">im</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="re">re</h4>
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
function result_tipo_5_0_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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