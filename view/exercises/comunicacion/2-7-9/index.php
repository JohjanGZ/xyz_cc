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
                            Día es a sol, como noche es a: <span class="palabra" alt="luna">x</span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">

                        <p>
                            Codo es a brazo, como rodilla es a: <span class="palabra" alt="pierna">x</span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <p>
                            Cinturón es a cintura, como collar es a: <span class="palabra" alt="cuello">x</span>
                        </p>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">

                        <p>
                            Rápido es a liebre, como lento es a: <span class="palabra" alt="tortuga">x</span>
                        </p>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="luna">luna</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pierna">pierna</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cuello">cuello</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tortuga">tortuga</h4>
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
function result_tipo_2_7_9() {
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