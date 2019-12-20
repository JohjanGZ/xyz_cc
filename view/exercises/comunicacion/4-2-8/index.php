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
                            <span class="palabra seleccion" alt="x">Mantel</span>
                            <span class="palabra seleccion" alt="x">Central</span>
                            <span class="palabra seleccion" alt="n">Cárcel</span>
                            <span class="palabra seleccion" alt="x">Teléfono</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="n">Campo</span>
                            <span class="palabra seleccion" alt="x">Hospital</span>
                            <span class="palabra seleccion" alt="x">Médico</span>
                            <span class="palabra seleccion" alt="x">Océano</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Plátano</span>
                            <span class="palabra seleccion" alt="x">Patinar</span>
                            <span class="palabra seleccion" alt="x">Corazón</span>
                            <span class="palabra seleccion" alt="n">Camisa</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Café</span>
                            <span class="palabra seleccion" alt="n">Puente</span>
                            <span class="palabra seleccion" alt="x">Párrafo</span>
                            <span class="palabra seleccion" alt="x">Cámara</span>
                        </p>
                        <p class="p-item">
                            <span class="palabra seleccion" alt="x">Pétalo</span>
                            <span class="palabra seleccion" alt="x">Aceptar</span>
                            <span class="palabra seleccion" alt="n">Cocina</span>
                            <span class="palabra seleccion" alt="x">Camarón</span>
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
function result_tipo_4_2_8() {
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