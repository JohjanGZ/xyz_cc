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
                <div class="contenedor-imagen">
                    <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
                </div>
                <div class="contenedor-oraciones">

                    <div class="oracion">
                        <h5>
                            <span>•</span> ¿Qué forma le han dado al caligrama?
                        </h5>
                        <div class="contenedor-check">

                            <div class="respuesta">
                                <span>Forma de león</span>
                            </div>
                            <div class="respuesta" alt="n">
                                <span>Forma de delfín</span>
                            </div>
                            <div class="respuesta">
                                <span>Forma de zorro</span>
                            </div>
                        </div>

                    </div>
                    <div class="oracion">
                        <h5>
                            <span>•</span> ¿Cómo dice que es el mundo?
                        </h5>
                        <div class="contenedor-check">
                            <div class="respuesta">
                                <span>Grande y azul</span>
                            </div>
                            <div class="respuesta">
                                <span>Ancho y ajeno</span>
                            </div>
                            <div class="respuesta" alt="n">
                                <span>Azul y nacarado</span>
                            </div>
                        </div>

                    </div>
                    <div class="oracion">
                        <h5>
                            <span>•</span> Al final del caligrama, ¿En qué se convierte el autor?
                        </h5>
                        <div class="contenedor-check">
                            <div class="respuesta" alt="n">
                                <span>En mar</span>
                            </div>
                            <div class="respuesta">
                                <span>En un delfín</span>
                            </div>
                            <div class="respuesta">
                                <span>En el sol</span>
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
function result_tipo_3_6_18() {
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