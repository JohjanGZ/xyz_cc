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
                            <span class="palabra seleccion" alt="n">joven</span>
                            <span class="palabra seleccion" alt="x">empresario</span>
                            <span class="palabra seleccion" alt="x">nos</span>
                            <span class="palabra seleccion" alt="x">explicó</span>
                            <span class="palabra seleccion" alt="x">sus</span>
                            <span class="palabra seleccion" alt="x">proyectos.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">Un</span>
                            <span class="palabra seleccion" alt="n">astuto</span>
                            <span class="palabra seleccion" alt="x">zorro</span>
                            <span class="palabra seleccion" alt="x">se</span>
                            <span class="palabra seleccion" alt="x">llevó</span>
                            <span class="palabra seleccion" alt="x">el</span>
                            <span class="palabra seleccion" alt="x">alimento</span>
                            <span class="palabra seleccion" alt="n">guardado.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">Un</span>
                            <span class="palabra seleccion" alt="n">generoso</span>
                            <span class="palabra seleccion" alt="x">hombre</span>
                            <span class="palabra seleccion" alt="x">regaló</span>
                            <span class="palabra seleccion" alt="x">muchos</span>
                            <span class="palabra seleccion" alt="x">cuadernos</span>
                            <span class="palabra seleccion" alt="x">a</span>
                            <span class="palabra seleccion" alt="x">los</span>
                            <span class="palabra seleccion" alt="x">niños.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">Las</span>
                            <span class="palabra seleccion" alt="x">personas</span>
                            <span class="palabra seleccion" alt="x">caminan</span>
                            <span class="palabra seleccion" alt="x">muy</span>
                            <span class="palabra seleccion" alt="n">lento</span>
                            <span class="palabra seleccion" alt="x">para</span>
                            <span class="palabra seleccion" alt="x">llegar</span>
                            <span class="palabra seleccion" alt="x">a</span>
                            <span class="palabra seleccion" alt="x">la</span>
                            <span class="palabra seleccion" alt="x">iglesia.</span>
                        </p>
                        <p class="p-item">
                            <span class="celeste">●</span>
                            <span class="palabra seleccion" alt="x">En</span>
                            <span class="palabra seleccion" alt="x">la</span>
                            <span class="palabra seleccion" alt="x">noche</span>
                            <span class="palabra seleccion" alt="x">terminé</span>
                            <span class="palabra seleccion" alt="x">la</span>
                            <span class="palabra seleccion" alt="n">difícil</span>
                            <span class="palabra seleccion" alt="x">tarea.</span>
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
function result_tipo_4_3_3() {
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