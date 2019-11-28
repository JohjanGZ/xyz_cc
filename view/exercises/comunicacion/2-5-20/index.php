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

                        <div class="palabra" alt="el">

                        </div>
                        <span class="span-after">director</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                    <div class="palabra" alt="el">

                        </div>
                        <span class="span-after">profesor</span>
                        
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="el">

                        </div>
                        <span>duque</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="el">

                        </div>
                        <span class="span-after">rey</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">niña</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">señora</span>
                       
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">doctora</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">madre</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">directora</span>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="la">

                        </div>
                        <span class="span-after">profesora</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="el">

                        </div>
                        <span class="span-after">niño</span>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">

                        <div class="palabra" alt="el">

                        </div>
                        <span class="span-after">señor</span>

                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="la">la</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">el</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_5_20() {
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