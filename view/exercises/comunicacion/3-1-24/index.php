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
                            Me encantaría atrapar el primer <span class="palabra" alt="rayo">x</span> del sol, antes de que  <br>
                            tocara la tierra, y guardarlo en una <span class="palabra" alt="gota">x</span>de rocío para que  <br>
                            cuando hiciera falta, sirviera de linterna a todos los habitantes del bosque. O.. también me  <br>
                            encantaría pintar en el cielo un <span class="palabra" alt="arcoiris">x</span> durante la noche, <br>
                            bajo la pálida luz de la luna, para que los seres <span class="palabra" alt="nocturnos">x</span> <br>
                            puedieran contemplar su belleza.
                        </p>

                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="rayo">rayo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="gota">gota</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="arcoiris">arcoíris</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="nocturnos">nocturnos</h4>
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
function result_tipo_3_1_24() {
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