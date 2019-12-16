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
                    
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">Anita</option>
                                        <option value="x">Jorge</option>
                                        <option value="x">Mi hermano</option>
                                    </select>
                                </span>
                                corre detrás de una mariposa.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Las hermanas</option>
                                        <option value="x">María</option>
                                        <option value="n">Juan y maría</option>
                                    </select>
                                </span>
                                leen un bello cuento.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                   
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/3.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">El papá de Luis</option>
                                        <option value="n">La mamá de Juan</option>
                                        <option value="x">La hermanita de Luis</option>
                                    </select>
                                </span>
                                espera que termine su comida.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/4.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">Los profesores</option>
                                        <option value="x">Los directores</option>
                                        <option value="n">Los alumnos</option>
                                    </select>
                                </span>
                                toman una decisión importante.
                            </p>
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
function result_tipo_3_8_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    $("select").each(function() {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });

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