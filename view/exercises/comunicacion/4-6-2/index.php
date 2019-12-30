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
                            <span class="celeste">● </span>
                            El gobernador le recibió y le ofreció una
                            <span class="palabra contenedor" alt="uno">x</span> 

                        </p>
                        <p>
                            <span class="celeste">● </span>
                            Cuando llegó el momento de regresar mandó
                            <span class="palabra contenedor" alt="dos">x</span>


                        </p>
                        <p>
                            <span class="celeste">● </span>
                            El gobernador tuvo una idea. Pensó en escoger seiscientas
                            <span class="palabra contenedor" alt="tres">x</span>


                        </p>
                        <p>
                            <span class="celeste">● </span>
                            El califa vió llegar una bandada de seiscientas
                            <span class="palabra contenedor" alt="cuatro">x</span>


                        </p>
                    </div>
                </div>

            </div>

            <div class="contenedor-imagenes">
                <span class="imagen pieza" alt="uno">
                    <img src="<?= $dir ?>/img/3.png" alt="">
                </span>
                <span class="imagen pieza" alt="dos">
                    <img src="<?= $dir ?>/img/4.png" alt="">
                </span>
                <span class="imagen pieza" alt="tres">
                    <img src="<?= $dir ?>/img/2.png" alt="">
                </span>
                <span class="imagen pieza" alt="cuatro">
                    <img src="<?= $dir ?>/img/1.png" alt="">
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
function result_tipo_4_6_2() {
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