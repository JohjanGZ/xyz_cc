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
                        <span>•</span> F = { X/X es una cifra par del resultado de 34 192 - 28 359 }
                    </h4>
                    <p>
                        F = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="x">7</option>
                                <option value="n">8</option>
                                <option value="x">44</option>
                                <option value="x">2</option>

                            </select>
                        </span>
                        }
                    </p>
                </div>
                <div class="ejercicio">
                    <h4>
                        <span>•</span> G = { Dígitos pares del resultado de 249 x 87 }
                    </h4>
                    <p>
                        G = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="x">2; 7</option>
                                <option value="x">41; 43</option>
                                <option value="n">2; 6</option>
                                <option value="x">6; 7</option>

                            </select>
                        </span>
                        }
                    </p>
                </div>
                <div class="ejercicio">
                    <h4>
                        <span>•</span> H = { Letras de la palabra <span>malecón</span> }
                    </h4>
                    <p>
                        H = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="x">m; 4; l; e; c; o; n</option>
                                <option value="x">m; a; l; e; c; o</option>
                                <option value="x">m; a; l; l; e; c; o; n</option>
                                <option value="n">m; a; l; e; c; o; n</option>

                            </select>
                        </span>
                        }
                    </p>
                </div>
                <div class="ejercicio">
                    <h4>
                        <span>•</span> I = { x/x es una cifra par del resultado de 63 546 + 24 597 }
                    </h4>
                    <p>
                        I = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="n">1; 3</option>
                                <option value="x">4; 5</option>
                                <option value="x">2; 6</option>
                                <option value="x">6; 7</option>

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
function result_tipo_4_0_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

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