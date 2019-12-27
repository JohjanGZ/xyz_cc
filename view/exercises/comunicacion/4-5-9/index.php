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
                            Los niños salieron al patio al oír la
                            <span class="palabra contenedor">x</span>.
                            <span class="imagen seleccion" >
                                <img src="<?= $dir ?>/img/1.png" alt="">
                            </span>
                            <span class="imagen seleccion" alt="n">
                                <img src="<?= $dir ?>/img/2.png" alt="">
                            </span>
                        </p>
                        <p>
                            <span class="celeste">● </span> 
                            Despegaron las
                            <span class="palabra contenedor">x</span>
                            cuando soplaba el viento.
                            <span class="imagen seleccion" alt="n">
                                <img src="<?= $dir ?>/img/3.png" alt="">
                            </span>
                            <span class="imagen seleccion">
                                <img src="<?= $dir ?>/img/4.png" alt="">
                            </span>
                        </p>
                        <p>
                            <span class="celeste">● </span> 
                            Se ha estropeado el
                            <span class="palabra contenedor">x</span>
                            de la computadora.
                            <span class="imagen seleccion">
                                <img src="<?= $dir ?>/img/5.png" alt="">
                            </span>
                            <span class="imagen seleccion" alt="n">
                                <img src="<?= $dir ?>/img/6.png" alt="">
                            </span>
                        </p>
                    </div>
                </div>

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
function result_tipo_4_5_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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