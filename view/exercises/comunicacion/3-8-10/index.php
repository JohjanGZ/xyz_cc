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
                    <span class="span-after">síla</span>

                        <div class="palabra" alt="b">

                        </div>
                        <span class="span-after">a</span>

                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                    <span class="span-after">primiti</span>

                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">o</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>escla</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>alusi</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>asoma</span>
                        <div class="palabra" alt="b">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>perci</span>
                        <div class="palabra" alt="b">

                        </div>
                        <span class="span-after">ir</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>efusi</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>cauti</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">o</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>vi</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">o</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>nati</span>
                        <div class="palabra" alt="v">

                        </div>
                        <span class="span-after">o</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>juzga</span>
                        <div class="palabra" alt="b">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>admira</span>
                        <div class="palabra" alt="b">

                        </div>
                        <span class="span-after">a</span>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="v">v</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="b">b</h4>
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
function result_tipo_3_6_14() {
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