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
                    <h4>El <span>palacio</span> está rodeado de jardines.</h4>
                    <div class="contenedor-respuesta">
                        <p>
                            El <span class="palabra" alt="castillo">x</span> está rodeado de jardines.
                        </p>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="castillo">castillo</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="lugar">lugar</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="edificio">edificio</h4>
                        </li>
                    </ul>
                </div>
                <div class="ejercicio">
                    <h4>Marta juega con su <span>balón</span> azul.</h4>
                    <div class="contenedor-respuesta">
                        <p>
                            Marta juega con su <span class="palabra" alt="pelota">x</span> azul.
                        </p>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="juguete">juguete</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="pelota">pelota</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="peonza">peonza</h4>
                        </li>
                    </ul>
                </div>
                <div class="ejercicio">
                    <h4>Iré <span>andando</span> hasta el parque.</h4>
                    <div class="contenedor-respuesta">
                        <p>
                            Iré <span class="palabra" alt="caminando">x</span> hasta el parque.
                        </p>
                    </div>
                    <ul class="contenedor-silabas">
                        <li class="silabas">
                            <h4 class="pieza" alt="corriendo">corriendo</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="caminando">caminando</h4>
                        </li>
                        <li class="silabas">
                            <h4 class="pieza" alt="viajando">viajando</h4>
                        </li>
                    </ul>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_4() {
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