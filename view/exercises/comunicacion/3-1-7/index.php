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
                            Negro: <span class="palabra" alt="blanco">x</span> <br>
                            Alto: <span class="palabra" alt="bajo">x</span> <br>
                            Lento: <span class="palabra" alt="rapido">x</span> <br>
                        </p>
                        <p>
                            Dormido: <span class="palabra" alt="despierto">x</span> <br>
                            Contento: <span class="palabra" alt="triste">x</span> <br>
                            Gordo: <span class="palabra" alt="flaco">x</span> <br>
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="blanco">blanco</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bajo">bajo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="rapido">rapido</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="despierto">despierto</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="triste">triste</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="flaco">flaco</h4>
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
function result_tipo_3_1_7() {
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