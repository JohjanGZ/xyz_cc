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
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>estimar</span>
                                </li>
                                <li class="palabra-x pieza" alt="uno">
                                    <span>socorrer</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>amar</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>querer</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="uno">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>perfume</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>aroma</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>fragancia</span>
                                </li>
                                <li class="palabra-x pieza" alt="dos">
                                    <span>fetidez</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="dos">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>gruta</span>
                                </li>
                                <li class="palabra-x pieza" alt="tres">
                                    <span>montaña</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>cueva</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>caverna</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="tres">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>alegre</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>contento</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>optimista</span>
                                </li>
                                <li class="palabra-x pieza" alt="cuatro">
                                    <span>afligido</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="cuatro">x</span>
                        </p>

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
function result_tipo_3_1_6() {
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