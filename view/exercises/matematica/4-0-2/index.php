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
                                    <option value="x">e</option>
                                    <option value="n">c</option>
                                    <option value="x">u</option>
                                    <option value="x">z</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra dos">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">f</option>
                                    <option value="x">g</option>
                                    <option value="n">l</option>
                                    <option value="x">o</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra tres">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">u</option>
                                    <option value="x">v</option>
                                    <option value="n">t</option>
                                    <option value="x">z</option>
                                </select>
                            </span>
                        </p>
                        <p class="letra cuatro">
                            •
                            <span>
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">m</option>
                                    <option value="x">v</option>
                                    <option value="x">o</option>
                                    <option value="n">p</option>
                                </select>
                            </span>
                        </p>
                    </div>

                </div>
                <div class="ejercicio">
                    <h4>
                        M es el conjunto de las consonantes de la palabra <span>eucalipto</P>
                    </h4>
                    <p>
                        M = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">c, l, p, t</option>
                                <option value="x">a, i, o, e, u</option>
                                <option value="x">e, u, c, a, l, i, p, t, o</option>
                                <option value="x"> a, n, c, t, i</option>
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
function result_tipo_4_0_2() {
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