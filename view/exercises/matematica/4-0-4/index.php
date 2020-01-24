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
                    <div class="conjunto">
                        <p class="letra uno">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">4</option>
                                    <option value="x">3</option>
                                    <option value="x">2</option>
                                    <option value="n">5</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra dos">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">2</option>
                                    <option value="x">3</option>
                                    <option value="n">1</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra tres">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="n">7</option>
                                    <option value="x">8</option>
                                    <option value="x">2</option>
                                    <option value="x">4</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra cuatro">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">8</option>
                                    <option value="n">9</option>
                                    <option value="x">1</option>
                                    <option value="x">7</option>
                                </select>
                            </span>
                        </p>
                    </div>

                </div>
                <div class="ejercicio">
                    <h4>
                        R es el conjunto de las cifras impares del número <span>91 576</P>
                    </h4>
                    <p>
                        M = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">9, 1, 5, 7, 6</option>
                                <option value="x">9, 7, 5, 1</option>
                                <option value="n">1, 5, 7, 9</option>
                                <option value="x"> 6, 7, 1, 5</option>
                            </select>
                        </span>
                        }
                    </p>
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
function result_tipo_4_0_4() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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