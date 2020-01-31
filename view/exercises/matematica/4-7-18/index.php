<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container-two">
        <div class="columna">
            <div class="principal">
                <p class="parrafo">De 280 empanadas que fueron puestas a la venta, se sabe que 60 de ellas son dulces, entonces:</p>
            </div>
            <div class="grid">
                <div class="ejercicio">
                    <div class="eje-item">
                        <span class="s">•</span>¿Cuál es la probabilidad de que una empanada comprada sea dulce?
                    </div>
                    <div class="eje-item">
                        Probabilidad <span class="s">=</span>
                        <div class="division">
                            <select class="browser-default seleccion" alt="60">
                                <option value="" disabled selected></option>
                                <option value="60">60</option>
                                <option value="500">500</option>
                                <option value="0,64">0,64</option>
                                <option value="0,65">0,65</option>
                                <option value="180">180</option>
                                <option value="0,36">0,36</option>
                                <option value="0,37">0,37</option>
                            </select>
                            <div class="ln"></div>
                            <select class="browser-default seleccion" alt="280">
                                <option value="" disabled selected></option>
                                <option value="320">320</option>
                                <option value="280">280</option>
                                <option value="0,64">0,64</option>
                                <option value="0,65">0,65</option>
                                <option value="180">180</option>
                                <option value="0,36">0,36</option>
                                <option value="0,37">0,37</option>
                            </select>
                        </div>
                        <span class="s">=</span>
                        <select class="browser-default seleccion" alt="0,21">
                            <option value="" disabled selected></option>
                            <option value="320">320</option>
                            <option value="500">500</option>
                            <option value="0,21">0,21</option>
                            <option value="0,65">0,65</option>
                            <option value="180">180</option>
                            <option value="0,36">0,36</option>
                            <option value="0,37">0,37</option>
                        </select>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="eje-item">
                        <span class="s">•</span>¿Cuál es la probabilidad de que una empanada comprada sea salada?
                    </div>
                    <div class="eje-item">
                        Probabilidad <span class="s">=</span>
                        <div class="division">
                            <select class="browser-default seleccion" alt="220">
                                <option value="" disabled selected></option>
                                <option value="320">320</option>
                                <option value="500">500</option>
                                <option value="0,64">0,64</option>
                                <option value="0,65">0,65</option>
                                <option value="220">220</option>
                                <option value="0,36">0,36</option>
                                <option value="0,37">0,37</option>
                            </select>
                            <div class="ln"></div>
                            <select class="browser-default seleccion" alt="280">
                                <option value="" disabled selected></option>
                                <option value="320">320</option>
                                <option value="280">280</option>
                                <option value="0,64">0,64</option>
                                <option value="0,65">0,65</option>
                                <option value="180">180</option>
                                <option value="0,36">0,36</option>
                                <option value="0,37">0,37</option>
                            </select>
                        </div>
                        <span class="s">=</span>
                        <select class="browser-default seleccion" alt="0,79">
                            <option value="" disabled selected></option>
                            <option value="320">320</option>
                            <option value="500">500</option>
                            <option value="0,64">0,64</option>
                            <option value="0,65">0,65</option>
                            <option value="180">180</option>
                            <option value="0,79">0,79</option>
                            <option value="0,37">0,37</option>
                        </select>
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
function result_tipo_4_7_18() {
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
        // console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>