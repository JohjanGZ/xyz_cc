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
                                Juan
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">estudió</option>
                                        <option value="x">estudiará</option>
                                        <option value="x">estudia</option>
                                    </select>
                                </span>
                                para dar el examen.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Mi mamá y yo
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">viajamos</option>
                                        <option value="n">viajaremos</option>
                                        <option value="x">viajabamos</option>
                                    </select>
                                </span>
                                a Londres.
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
                                El auto
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">corrió</option>
                                        <option value="x">correrá</option>
                                        <option value="n">corre</option>
                                    </select>
                                </span>
                                rápidamente por la carretera.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">
                        <div class="contenedor-img">
                            <img src="<?= $dir ?>/img/4.png" alt="">
                        </div>
                        <div class="contenedor-texto">
                            <p>
                                Camila
                                <span>
                                    <select class="browser-default" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">preparará</option>
                                        <option value="n">preparó</option>
                                        <option value="x">prepara</option>
                                    </select>
                                </span>
                                un exquisito pastel.
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
function result_tipo_3_5_15() {
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