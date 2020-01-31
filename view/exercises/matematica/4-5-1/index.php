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

            <div class="contenedor-ejercicio">

                <p>
                    Un vendedor de piñas anota los pesos de los pedidos más frecuentes y debajo de ellos los respectivos
                    precios de los dos primeros.
                </p>
                <div class="peso" style="border-bottom: 0px;">
                    <span class="titulo">
                        Peso de piñas <br>
                        (en Kg)
                    </span>
                    <span class="totalx">1</span>
                    <span class="totalx">2</span>
                    <span class="totalx">3</span>
                    <span class="totalx">5</span>
                    <span class="totalx">7</span>
                    <span class="totalx">10</span>
                    <span class="totalx">12</span>
                    <span class="totalx">14</span>
                    <span class="totalx">15</span>
                </div>
                <div class="peso" style="border-top: 0px;">
                    <span class="titulo">
                        Precio <br>
                        (en soles)
                    </span>
                    <span class="totalx" alt="">3</span>
                    <span class="totalx" alt="">6</span>
                    <span class="totalx resolver total" alt="9"></span>
                    <span class="totalx resolver total" alt="15"></span>
                    <span class="totalx resolver total" alt="21"></span>
                    <span class="totalx resolver total" alt="27"></span>
                    <span class="totalx resolver total" alt="30"></span>
                    <span class="totalx resolver total" alt="36"></span>
                    <span class="totalx resolver total" alt="42"></span>
                </div>

                <div class="proporcionalidad">
                    <div id="numeros"></div>
                    <p>
                        Razón de proporcionalidad = <span class="total resolver" alt="3">

                        </span>
                    </p>
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
function result_tipo_4_5_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    comprobar_operacion_numeros();
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