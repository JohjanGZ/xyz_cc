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
                    <div class="ejercicio-item rosa">
                        <div class="palabras">
                            <img src="<?= $dir ?>/img/1.png" alt="">
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Útiles escolares</option>
                                    <option value="n">Muebles del hogar</option>
                                    <option value="x">Metales preciosos</option>
                                    <option value="x">Partes del hogar</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item celeste">
                        <div class="palabras">
                            <img src="<?= $dir ?>/img/2.png" alt="">
                        </div>
                        <div class="semantico">
                            <p>
                                Campo semántico
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">Materias escolares</option>
                                    <option value="x">Comidas típicas</option>
                                    <option value="x">Paíse del mundo</option>
                                    <option value="n">Tipos de viviendas</option>
                                </select>
                            </span>
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
function result_tipo_4_4_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 2) {
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