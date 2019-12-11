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
                            <span class="palabra" alt="">Carolina</span>
                            <span class="palabra" alt="">Sofía</span>
                            <span class="palabra" alt="n">Araña</span>
                            <span class="palabra" alt="">Martha</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="n">cuadro</span>
                            <span class="palabra" alt="">perro</span>
                            <span class="palabra" alt="">gato</span>
                            <span class="palabra" alt="">loro</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="">diez</span>
                            <span class="palabra" alt="n">sol</span>
                            <span class="palabra" alt="">dos</span>
                            <span class="palabra" alt="">cinco</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="">olla</span>
                            <span class="palabra" alt="">tetera</span>
                            <span class="palabra" alt="n">pantalón</span>
                            <span class="palabra" alt="">sartén</span>
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            <span class="palabra" alt="">sábado</span>
                            <span class="palabra" alt="">viernes</span>
                            <span class="palabra" alt="">lunes</span>
                            <span class="palabra" alt="n">televisor</span>
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
function result_tipo_3_6_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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