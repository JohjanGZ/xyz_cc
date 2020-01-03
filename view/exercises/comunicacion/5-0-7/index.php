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
                                Establecimiento en el que se fabrica chocolate.
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">chocolatada</option>
                                        <option value="x">chocolatera</option>
                                        <option value="n">chocolatería</option>
                                        <option value="x">chocolatero</option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>

                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Persona que fabrica o vende chocolates.
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">chocolatada</option>
                                        <option value="x">chocolatera</option>
                                        <option value="x">chocolatería</option>
                                        <option value="n">chocolatero</option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Reunión en la que se toma principalmente chocolate.
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="n">chocolatada</option>
                                        <option value="x">chocolatera</option>
                                        <option value="x">chocolatería</option>
                                        <option value="x">chocolatero</option>
                                    </select>
                                </span>

                            </p>
                        </div>
                    </div>
                    <div class="ejercicio-item">

                        <div class="contenedor-texto">
                            <p>
                                Recipiente destinado a servir los chocolates.
                                <span class="selectx">
                                    <select class="browser-default seleccion" alt="n">
                                        <option value="" disabled selected>Escoge una opción</option>
                                        <option value="x">chocolatada</option>
                                        <option value="n">chocolatera</option>
                                        <option value="x">chocolatería</option>
                                        <option value="x">chocolatero</option>
                                    </select>
                                </span>

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
function result_tipo_5_0_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
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