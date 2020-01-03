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
                            Wandy, la bella hija del cacique de los Huaylas, se
                            <span class="palabra contenedor" alt="enamoro">x</span>
                            de
                        </p>
                        <p>
                            quien no
                            <span class="palabra contenedor" alt="debia">x</span>
                            hacerlo nunca: de Huáscar, un apuesto soldado
                        </p>
                        <p>
                            del ejercito de su padre. Como consecuencia de ese amor, la doncella
                        </p>
                        <p>
                            <span class="palabra contenedor" alt="tuvo">x</span>
                            que sufrir mucho. Mientras
                            <span class="palabra contenedor" alt="practicaba">x</span>
                            , Huáscar se
                        </p>
                        <p>
                            ganaba la simpatía de la joven, quien lo 
                            <span class="palabra contenedor" alt="observaba">x</span>
                            , pero nunca 
                        </p>
                        <p>
                            logró conversar con él.
                        </p>     
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="enamoro">enamoró</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="debia">debía</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="tuvo">tuvo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="practicaba">practicaba</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="observaba">observaba</h4>
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
function result_tipo_5_0_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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