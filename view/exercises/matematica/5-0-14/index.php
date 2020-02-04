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
                    <h4>
                        Sean los conjuntos: N = { t; u } y P = { u; w; y }
                    </h4>
                    <div class="conjunto">
                        <p class="letra uno">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(w, u)</option>
                                    <option value="x">(u, t)</option>
                                    <option value="x">(w, t)</option>
                                    <option value="n">(u, u)</option>
                                    <option value="x">(y, u)</option>
                                    <option value="x">(t, t)</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra dos">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(u, t)</option>
                                    <option value="n">(w, u)</option>
                                    <option value="x">(y, u)</option>
                                    <option value="x">(w, t)</option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(t, t)</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra tres">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(w, u)</option>
                                    <option value="x">(u, t)</option>
                                    <option value="x">(w, t)</option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(t, t)</option>
                                    <option value="n">(y, u)</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra cuatro">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(w, u)</option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(w, t)</option>
                                    <option value="n">(u, t)</option>
                                    <option value="x">(y, u)</option>
                                    <option value="x">(t, t)</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra cinco">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">(w, t)</option>
                                    <option value="x">(u, t)</option>
                                    <option value="x">(w, u)</option>
                                    <option value="x">(y, u)</option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(t, t)</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra seis">

                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">(w, u)</option>
                                    <option value="n">(y, t)</option>
                                    <option value="x">(u, t)</option>
                                    <option value="x">(w, t)</option>
                                    <option value="x">(u, u)</option>
                                    <option value="x">(y, u)</option>
                                </select>
                            </span>
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
function result_tipo_5_0_14() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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