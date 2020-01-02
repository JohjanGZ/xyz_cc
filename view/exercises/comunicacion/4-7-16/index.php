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

                        <div class="semantico">
                            <p>
                                La reina le ofreció toda clase de tesoros para poder quedarse con su hija, pero el
                                hombrecillo no los aceptó.
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="n">2</option>
                                    <option value="x">3</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item celeste">
                        <div class="semantico">
                            <p>
                                Rumpelstiltskin desapareció por el hueco que abrió en el suelo y nadie lo volvió a ver
                                jamás.
                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="x">1</option>
                                    <option value="x">2</option>
                                    <option value="n">3</option>
                                </select>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="ejercicio-item amarillo">
                        <div class="semantico">
                            <p>
                                Esa noche, el rey llevó a la hija del molinero a una habitación llena de paja.

                            </p>
                            <span class="selectx">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected>Escoge una opción</option>
                                    <option value="n">1</option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
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
function result_tipo_4_7_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
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