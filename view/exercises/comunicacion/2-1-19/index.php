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
                            Con hojas doradas <br>
                            de color <span class="palabra" alt="amarillo">x</span>, <br>
                            estaba en <span class="palabra" alt="otono">x</span> <br>
                            triste el arbolito
                        </p>

                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <p>
                            La lluvia <span class="palabra" alt="caia">x</span> <br>
                            el viento sopló, <br>
                            el triste arbolito <br>
                            sin <span class="palabra" alt="hojas">x</span>, <br>
                            se quedó.
                        </p>

                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="amarillo">amarillo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="otono">otoño</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="caia">caía</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="hojas">hojas</h4>
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
function result_tipo_2_1_19() {
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