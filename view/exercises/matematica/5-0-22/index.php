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
                        3 dam =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0,003</option>
                                <option value="n">0,03</option>
                                <option value="x">3</option>
                                <option value="x">30 000</option>
                            </select>
                        </span>
                        km
                    </p>

                    <p>
                        6 dam =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">0,6</option>
                                <option value="x">0,006</option>
                                <option value="x">0,06</option>
                                <option value="x">6</option>
                            </select>
                        </span>
                        hm
                    </p>
                    <p>
                        7 hm =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0,06</option>
                                <option value="x">0,007</option>
                                <option value="x">6</option>
                                <option value="n">0,7</option>
                            </select>
                        </span>
                        km
                    </p>
                    <p>
                        5 hm =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0,005</option>
                                <option value="x">0,05</option>
                                <option value="n">50</option>
                                <option value="x">5</option>
                            </select>
                        </span>
                        dam
                    </p>
                    <p>
                        8 km =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0,008</option>
                                <option value="x">0,08</option>
                                <option value="n">80</option>
                                <option value="x">8</option>
                            </select>
                        </span>
                        hm
                    </p>
                    <p>
                        2 km =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">200</option>
                                <option value="x">20</option>
                                <option value="x">20 000</option>
                                <option value="x">0,002</option>
                            </select>
                        </span>
                        dam
                    </p>
                    <p>
                        4 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">400</option>
                                <option value="x">40</option>
                                <option value="x">40 000</option>
                                <option value="n">0,004</option>
                            </select>
                        </span>
                        km
                    </p>
                    <p>
                        2 m =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">0,02</option>
                                <option value="x">0,200</option>
                                <option value="x">20</option>
                                <option value="x">0,2</option>
                            </select>
                        </span>
                        hm
                    </p>

                    <p>
                        9 dam =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">90</option>
                                <option value="x">0,900</option>
                                <option value="n">0,09</option>
                                <option value="x">0,9</option>
                            </select>
                        </span>
                        km
                    </p>

                    <p>
                        800 mam =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">0.008</option>
                                <option value="n">8 000 000</option>
                                <option value="x">8 000</option>
                                <option value="x">0,000008</option>
                            </select>
                        </span>
                        m
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
function result_tipo_5_0_22() {
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