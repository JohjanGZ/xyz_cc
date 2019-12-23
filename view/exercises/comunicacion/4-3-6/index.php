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
                        <span class="celeste">●</span> Estamos en pleno verano, <span class="palabra contenedor" alt="noobstante">x</span> hace mucho frío.
                        </p>
                        <p>
                        <span class="celeste">●</span> Nunca llegó tarde, <span class="palabra contenedor" alt="alcontrario">x</span> soy la primera en llegar.
                        </p>
                        <p>
                        <span class="celeste">●</span> Durante toda la noche ha llovido, <span class="palabra contenedor" alt="sinembargo">x</span> hace calor.
                        </p>
                        <p>
                        <span class="celeste">●</span> Iría a la playa contigo, <span class="palabra contenedor" alt="pero">x</span> tengo muchas cosas que hacer.
                        </p>
                       
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="noobstante">no obstante</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="alcontrario">al contrario</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="sinembargo">sin embargo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pero">pero</h4>
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
function result_tipo_4_3_6() {
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