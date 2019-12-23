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
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">El</span>
                            <span class="palabra seleccion" alt="x">camino</span>
                            <span class="palabra seleccion" alt="x">estuvo</span>
                            <span class="palabra seleccion" alt="x">muy</span>
                            <span class="palabra seleccion" alt="n">entretenido.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">El</span>
                            <span class="palabra seleccion" alt="x">elefante</span>
                            <span class="palabra seleccion" alt="n">blanco</span>
                            <span class="palabra seleccion" alt="x">camina</span>
                            <span class="palabra seleccion" alt="n">lentamente.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">Los</span>
                            <span class="palabra seleccion" alt="n">pequeños</span>
                            <span class="palabra seleccion" alt="x">niños</span>
                            <span class="palabra seleccion" alt="x">comen</span>
                            <span class="palabra seleccion" alt="x">una</span>
                            <span class="palabra seleccion" alt="n">exquisita</span>
                            <span class="palabra seleccion" alt="x">manzana.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">Una</span>
                            <span class="palabra seleccion" alt="n">linda</span>
                            <span class="palabra seleccion" alt="x">mariposa</span>
                            <span class="palabra seleccion" alt="n">blanca</span>
                            <span class="palabra seleccion" alt="x">se</span>
                            <span class="palabra seleccion" alt="x">paró</span>
                            <span class="palabra seleccion" alt="x">en</span>
                            <span class="palabra seleccion" alt="x">la</span>
                            <span class="palabra seleccion" alt="x">ventana.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">La</span>
                            <span class="palabra seleccion" alt="n">dulce</span>
                            <span class="palabra seleccion" alt="x">naranja</span>
                            <span class="palabra seleccion" alt="x">está</span>
                            <span class="palabra seleccion" alt="n">deliciosa.</span>
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
function result_tipo_4_2_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 9) {
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