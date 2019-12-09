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
                        <span class="celeste">●</span> Iré a la casa de <span class="palabra" alt="x">x</span> amigo para felicitarlo por <span class="palabra" alt="su">x</span> cumpleaños.
                        </p>
                        <p>
                        <span class="celeste">●</span> Nosotros siempre compartimos <span class="palabra" alt="nuestros">x</span> juguetes.
                        </p>
                        <p>
                        <span class="celeste">●</span> ¿Has encontrado<span class="palabra" alt="tus">x</span> invitaciones a la fiesta?
                        </p>
                        <p>
                        <span class="celeste">●</span> <span class="palabra" alt="x">x</span> perro y <span class="palabra" alt="x">x</span> gato están muy bien cuidados.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="x">mi</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="su">su</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="nuestros">nuestros</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tus">tus</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">mi</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="x">tu</h4>
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
function result_tipo_3_3_16() {
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