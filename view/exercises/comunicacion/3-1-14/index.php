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
                                <li class="palabra-x pieza" alt="ro">
                                    <span>ro</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>jo</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="ro">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza" alt="la">
                                    <span>lá</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>piz</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="la">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>ho</span>
                                </li>
                                <li class="palabra-x pieza" alt="tel">
                                    <span>tel</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="tel">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>i</span>
                                </li>
                                <li class="palabra-x pieza" alt="ma">
                                    <span>ma</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>gen</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="ma">x</span>
                        </p>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>pe</span>
                                </li>
                                <li class="palabra-x pieza" alt="li">
                                    <span>lí</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>cu</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>la</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="li">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>cua</span>
                                </li>
                                <li class="palabra-x pieza" alt="der">
                                    <span>der</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>no</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="der">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>a</span>
                                </li>
                                <li class="palabra-x pieza" alt="nis">
                                    <span>nís</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="nis">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>fran</span>
                                </li>
                                <li class="palabra-x pieza" alt="ces">
                                    <span>cés</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="ces">x</span>
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
function result_tipo_3_1_14() {
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