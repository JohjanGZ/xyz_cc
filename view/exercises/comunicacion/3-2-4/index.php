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
                                    <span>correr</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>corredor</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>carrera</span>
                                </li>
                                <li class="palabra-x pieza" alt="correa">
                                    <span>correa</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="correa">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>flor</span>
                                </li>
                                <li class="palabra-x pieza" alt="rosa">
                                    <span>rosa</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>floristería</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>florero</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="rosa">x</span>
                        </p>


                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>camino</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>caminante</span>
                                </li>
                                <li class="palabra-x pieza" alt="terreno">
                                    <span>terreno</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>caminar</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="terreno">x</span>
                        </p>

                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            <ul class="contenedor-palabras">
                                <li class="palabra-x pieza">
                                    <span>café</span>
                                </li>
                                <li class="palabra-x pieza" alt="te">
                                    <span>té</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>cafetal</span>
                                </li>
                                <li class="palabra-x pieza">
                                    <span>cafetería</span>
                                </li>
                            </ul>
                            <span class="palabra" alt="te">x</span>
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
function result_tipo_3_2_4() {
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