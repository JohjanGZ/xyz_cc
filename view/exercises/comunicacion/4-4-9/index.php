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
                            En el cristal de un espejo <br>
                            a los cuarenta me vi
                        </p>
                        <p>
                            y hallándome feo y
                            <span class="palabra contenedor" alt="viejo"></span>

                        </p>
                        <p>
                            de rabia el cristal
                            <span class="palabra contenedor" alt="rompi">x</span>.
                        </p>
                    </div>
                    <div class="contenedor-respuesta">
                        <p>
                            De alma en la transparencia <br>
                            mi rostro entonces miré,
                        </p>
                        <p>
                            y tal me ví en la
                            <span class="palabra contenedor" alt="conciencia"></span>
                        </p>
                        <p>
                            que el corazón me
                            <span class="palabra contenedor" alt="rasgue">x</span>.
                        </p>
                    </div>
                    <div class="contenedor-respuesta x">
                        <p>
                            Y es que, en perdiendo el
                            <span class="palabra contenedor" alt="mortal"></span>

                        </p>
                        <p>
                            la fe, juventud y amor, <br>
                            ¡Se mira al espejo, y... mal! <br>
                            ¡Se ve en el alma, y... peor!
                        </p>

                    </div>
                </div>

            </div>

            <div class="contenedor-imagenes">
                <span class="imagen pieza" alt="viejo">
                   viejo
                </span>
                <span class="imagen pieza" alt="rompi">
                    rompí
                </span>
                <span class="imagen pieza" alt="conciencia">
                    conciencia
                </span>
                <span class="imagen pieza" alt="mortal">
                    mortal
                </span>
                <span class="imagen pieza" alt="rasgue">
                    rasgué
                </span>
            </div>
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
function result_tipo_4_4_9() {
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