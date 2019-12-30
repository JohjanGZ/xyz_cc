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

                        <div class="contenedor-texto">
                            <p>
                                A donde 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">valla</option>
                                        <option value="n">vaya</option>
                                    </select>
                                </span>
                                , llevo mi libro de lectura.
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Yo siempre
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">echo</option>
                                        <option value="x">hecho</option>
                                    </select>
                                </span>
                                los desperdicios al tacho.
                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Mi cantante preferido está en la
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">cima</option>
                                        <option value="x">sima</option>
                                    </select>
                                </span>
                                del éxito.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                El 
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">siervo</option>
                                        <option value="n">ciervo</option>
                                    </select>
                                </span>
                                huyó rápidamente al ver a un cazador.
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                La piscina de la casa de Arturo es muy
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">honda</option>
                                        <option value="x">onda</option>
                                    </select>
                                </span>
                                .
                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Hoy día voy a
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">gravar</option>
                                        <option value="n">grabar</option>
                                    </select>
                                </span>
                                mi película favorita.
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
function result_tipo_4_6_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
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