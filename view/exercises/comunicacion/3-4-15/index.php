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
                        <span class="celeste">●</span> <b>Juliana y yo</b> tomamos helados. | <span class="palabra" alt="nosotras">x</span>tomamos helados.
                        </p>
                        <p>
                        <span class="celeste">●</span> <b>Mi amigo</b> estudia música en la escuela. | <span class="palabra" alt="el">x</span>estudia música en la escuela.
                        </p>
                        <p>
                        <span class="celeste">●</span> Los domingos <b>la señora López </b>va al cine. | Los domingos <span class="palabra" alt="ella">x</span>va al cine.
                        </p>
                        <p>
                        <span class="celeste">●</span> <b>Señor Rodríguez</b>, ¿Es peruano o chileno? | <span class="palabra" alt="usted">x</span>, ¿Es peruano o chileno?
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="nosotras">Nosotras</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">Él</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ella">Ella</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="usted">Usted</h4>
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
function result_tipo_3_4_15() {
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