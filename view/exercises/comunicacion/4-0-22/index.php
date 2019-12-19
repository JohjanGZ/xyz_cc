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
                <div class="contenedor-imagen">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
                <div class="ejercicio">
                    <div class="oracion">

                        <div class="contenedor-check">
                            <div class="respuesta seleccion" alt="n">
                                <span class="celeste">●</span><span> Enorme</span>
                            </div>
                            <div class="respuesta seleccion" alt="n">
                                <span class="celeste">●</span><span> Lleno de rabia</span>
                            </div>
                            <div class="respuesta seleccion" alt="n">
                                <span class="celeste">●</span><span> Brazos fuertes</span>
                            </div>
                            <div class="respuesta seleccion" alt="n">
                                <span class="celeste">●</span><span> Desagradable</span>
                            </div>
                            <div class="respuesta seleccion" alt="n">
                                <span class="celeste">●</span><span> Horrible rostro</span>
                            </div>
                            <div class="respuesta seleccion">
                                <span class="celeste">●</span><span> Astuto</span>
                            </div>
                            <div class="respuesta seleccion">
                                <span class="celeste">●</span><span> Espalda velluda</span>
                            </div>
                            <div class="respuesta seleccion">
                                <span class="celeste">●</span><span> Espantadizo</span>
                            </div>
                        </div>

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
function result_tipo_4_0_22() {
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