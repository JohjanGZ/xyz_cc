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

                <div class="contenedor">

                    <p>
                        6 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0,006</option>
                                <option value="x">0,06</option>
                                <option value="x">6</option>
                                <option value="n">600</option>
                            </select>
                        </span>
                        cm
                    </p>

                    <p>
                        85 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">8,5</option>
                                <option value="n">850</option>
                                <option value="x">8 500</option>
                                <option value="x">0,085</option>
                            </select>
                        </span>
                        dm
                    </p>
                    <p>
                        0,6 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">6</option>
                                <option value="x">0,006</option>
                                <option value="x">0,6</option>
                                <option value="n">600</option>
                            </select>
                        </span>
                        mm
                    </p>
                    <p>
                        0,346 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">346</option>
                                <option value="x">3,46</option>
                                <option value="x">3 460</option>
                                <option value="x">0,346</option>
                            </select>
                        </span>
                        mm
                    </p>
                    <p>
                        9 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">9</option>
                                <option value="x">0,009</option>
                                <option value="n">90</option>
                                <option value="x">0,09</option>
                            </select>
                        </span>
                        dm
                    </p>
                    <p>
                        5 000 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">500</option>
                                <option value="x">50</option>
                                <option value="n">50 000</option>
                                <option value="x">0,0005</option>
                            </select>
                        </span>
                        dm
                    </p>
                    <p>
                        3 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">30 000</option>
                                <option value="x">30</option>
                                <option value="x">0,003</option>
                                <option value="n">300</option>
                            </select>
                        </span>
                        cm
                    </p>
                    <p>
                        280 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2,8</option>
                                <option value="n">28 000</option>
                                <option value="x">2 800</option>
                                <option value="x">0,28</option>
                            </select>
                        </span>
                        mm
                    </p>

                    <p>
                        1 240 mm =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">12,4</option>
                                <option value="x">12,400</option>
                                <option value="x">1,24</option>
                                <option value="x">12 400</option>
                            </select>
                        </span>
                        dm
                    </p>

                    <p>
                        87,5 mm =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0.00875</option>
                                <option value="n">87 500</option>
                                <option value="x">8 750</option>
                                <option value="x">8,75</option>
                            </select>
                        </span>
                        um
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
function result_tipo_5_0_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 10) {
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