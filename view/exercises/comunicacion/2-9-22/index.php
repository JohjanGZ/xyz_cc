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
                            Dos <span class="palabra" alt="cestos">x</span> de leche y un <span class="palabra" alt="litro">x</span> de <br>
                            nabos, un saco de <span class="palabra" alt="mantequilla">x</span> y un <span class="palabra" alt="pan">x</span> de <br>
                            <span class="palabra" alt="tocino">x</span>. Y media <span class="palabra" alt="docena">x</span> de coles y una <br>
                            <span class="palabra" alt="jarra">x</span> de <span class="palabra" alt="fideos">x</span>, por favor.
                        </p>

                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="cestos">cestos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mantequilla">mantequilla</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tocino">tocino</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="jarra">jarra</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="litro">litro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pan">pan</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="docena">docena</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="fideos">fideos</h4>
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
function result_tipo_2_9_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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