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

                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">inete</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                    <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">eranio</span>
                        
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="g">

                        </div>
                        <span>igante</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">eología</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>ti</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">era</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>mensa</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ero</span>
                       
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>tar</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">eta</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>a</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">edrez</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>re</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">ión</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">imnasia</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ilguero</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>a</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">enda</span>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="g">g</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
                </li>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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