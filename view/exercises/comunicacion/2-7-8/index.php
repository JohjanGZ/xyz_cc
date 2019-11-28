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
                        <p class="titulo-parrafo">Sinonimia</p>
                        <p>
                            Breve: <span class="palabra" alt="efimero">x</span>
                        </p>
                        <p>
                            Bello: <span class="palabra" alt="bonito">x</span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                    <p class="titulo-parrafo">Antonimia</p>

                        <p>
                            Alegre: <span class="palabra" alt="triste">x</span>
                        </p>
                        <p>
                            Joven: <span class="palabra" alt="viejo">x</span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                    <p class="titulo-parrafo">Causa - Efecto</p>

                        <p>
                            Guerra: <span class="palabra" alt="muerte">x</span>
                        </p>
                        <p>
                            Infracción: <span class="palabra" alt="multa">x</span>
                        </p>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="efimero">efimero</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bonito">bonito</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="triste">triste</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="viejo">viejo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="muerte">muerte</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="multa">multa</h4>
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
function result_tipo_2_7_8() {
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