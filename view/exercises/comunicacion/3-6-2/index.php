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
                <h6 style="color: #0095da;">
                    Ingredientes de la receta:
                </h6>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">1-&nbsp; </span>

                        <div class="palabra" alt="uno">

                        </div>
                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">2-&nbsp; </span>

                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">3-&nbsp; </span>

                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">4-&nbsp; </span>

                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio ">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">5-&nbsp; </span>

                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span style="color: #0095da;">6-&nbsp; </span>
                        <div class="palabra" alt="uno">

                        </div>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="uno">azúcar</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">miel</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">avena</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">huevos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">harina</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uno">limón rayado</h4>
                </li>


                <li class="silabas">
                    <h4 class="pieza" alt="dos">trigo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">gelatina</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="dos">pasas</h4>
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
function result_tipo_3_6_2() {
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