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
                            <span class="palabra seleccion" alt="x">Pantalón</span>
                            <span class="palabra seleccion" alt="x">Camisa</span>
                            <span class="palabra seleccion" alt="x">Jersey</span>
                            <span class="palabra seleccion" alt="x">Calcetines</span>
                            <span class="palabra seleccion" alt="n">Armario</span>
                            <span class="palabra seleccion" alt="x">Suéter</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Carpintero</span>
                            <span class="palabra seleccion" alt="x">Carnicero</span>
                            <span class="palabra seleccion" alt="n">Cenicero</span>
                            <span class="palabra seleccion" alt="x">Obrero</span>
                            <span class="palabra seleccion" alt="x">Cocinero</span>
                            <span class="palabra seleccion" alt="x">Ingeniero</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Plátano</span>
                            <span class="palabra seleccion" alt="x">Mango</span>
                            <span class="palabra seleccion" alt="x">Maracuyá</span>
                            <span class="palabra seleccion" alt="x">Uva</span>
                            <span class="palabra seleccion" alt="x">Manzana</span>
                            <span class="palabra seleccion" alt="n">Lechuga</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Café</span>
                            <span class="palabra seleccion" alt="x">Leche</span>
                            <span class="palabra seleccion" alt="x">Cocoa</span>
                            <span class="palabra seleccion" alt="x">Quaker</span>
                            <span class="palabra seleccion" alt="x">Chocolate</span>
                            <span class="palabra seleccion" alt="n">Mantequilla</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Matemática</span>
                            <span class="palabra seleccion" alt="x">Comunicación</span>
                            <span class="palabra seleccion" alt="x">Ciencias</span>
                            <span class="palabra seleccion" alt="x">Historia</span>
                            <span class="palabra seleccion" alt="x">Economía</span>
                            <span class="palabra seleccion" alt="n">Cuaderno</span>
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