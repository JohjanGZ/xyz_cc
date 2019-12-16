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
                    <span class="span-after">de</span>

                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ar</span>

                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                    <span class="span-after">ele</span>

                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">ir</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>co</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">er</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>relo</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ero</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>ru</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">ir</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>ma</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">ia</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>traba</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ar</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>in</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">enioso</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>flo</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ear</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>conse</span>
                        <div class="palabra" alt="j">

                        </div>
                        <span class="span-after">ero</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">araje</span>
                    </div>
                </div>
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <span>aler</span>
                        <div class="palabra" alt="g">

                        </div>
                        <span class="span-after">ia</span>
                    </div>
                </div>
            </div>
            <ul class="contenedor-silabas">
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
                    <h4 class="pieza" alt="g">g</h4>
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
                    <h4 class="pieza" alt="j">j</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="j">j</h4>
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
function result_tipo_3_8_10() {
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