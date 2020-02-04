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

                    <div class="uno">
                        <img src="<?= $dir ?>/img/1.png" alt="">
                    </div>

                    <p class="centro">

                        <div class="operacion">

                            <span>Fracción: </span>
                            &nbsp;
                            <div class="fraccion">
                                <div class="item">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="x">5</option>
                                            <option value="x">6</option>
                                            <option value="n">7</option>
                                            <option value="x">8</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="item bt">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="x">11</option>
                                            <option value="n">12</option>
                                            <option value="x">15</option>
                                            <option value="x">10</option>
                                        </select>
                                    </span>
                                </div>
                            </div>



                        </div>

                    </p>
                    <p>
                        <span style="font-weight:700;">
                            Nombre:
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">Siete doceavos</option>
                                <option value="x">Siete doces</option>
                                <option value="x">Siete docevos</option>
                                <option value="x">Siete doce</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>

                    <p class="centro">

                        <div class="operacion">

                            <span>Fracción: </span>
                            &nbsp;
                            <div class="fraccion">
                                <div class="item">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="n">8</option>
                                            <option value="x">5</option>
                                            <option value="x">7</option>
                                            <option value="x">6</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="item bt">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="x">12</option>
                                            <option value="x">15</option>
                                            <option value="x">10</option>
                                            <option value="n">11</option>
                                        </select>
                                    </span>
                                </div>
                            </div>



                        </div>

                    </p>
                    <p>
                        <span style="font-weight:700;">
                            Nombre:
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">Siete onces</option>
                                <option value="x">Siete oncevos</option>
                                <option value="n">Siete onceavos</option>
                                <option value="x">Siete once</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>

                    <p class="centro">

                        <div class="operacion">

                            <span>Fracción: </span>
                            &nbsp;
                            <div class="fraccion">
                                <div class="item">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="n">4</option>
                                            <option value="x">6</option>
                                            <option value="x">5</option>
                                            <option value="x">8</option>
                                        </select>
                                    </span>
                                </div>
                                <div class="item bt">
                                    <span class="select">
                                        <select class="browser-default seleccion" alt="n">
                                            <option value="" disabled selected></option>
                                            <option value="x">7</option>
                                            <option value="x">4</option>
                                            <option value="x">2</option>
                                            <option value="n">6</option>
                                        </select>
                                    </span>
                                </div>
                            </div>



                        </div>

                    </p>
                    <p>
                        <span style="font-weight:700;">
                            Nombre:
                        </span>
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">Cuatro sextavos</option>
                                <option value="n">Cuatro sextos</option>
                                <option value="x">Cuatro seis</option>
                                <option value="x">Cuatro sextevo</option>
                            </select>
                        </span>
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
function result_tipo_5_4_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 9) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>