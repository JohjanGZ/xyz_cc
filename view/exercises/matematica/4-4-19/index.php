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

                    <p>
                        P =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">11</option>
                                <option value="n">12</option>
                                <option value="x">13</option>
                            </select>
                        </span>
                        cm
                    </p>

                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/2.png" alt="">
                    </div>

                    <p>
                        P =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">11</option>
                                <option value="x">12</option>
                                <option value="x">13</option>
                            </select>
                        </span>
                        cm
                    </p>
                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/3.png" alt="">
                    </div>

                    <p>

                        <p>
                            P =
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">26</option>
                                    <option value="x">21</option>
                                    <option value="n">24</option>
                                </select>
                            </span>
                            cm
                        </p>
                    </p>

                </div>


                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/4.png" alt="">
                    </div>

                    <p>
                        P =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">13</option>
                                <option value="x">17</option>
                                <option value="n">15</option>
                            </select>
                        </span>
                        cm
                    </p>

                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/5.png" alt="">
                    </div>

                    <p>
                        P =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">11</option>
                                <option value="n">12</option>
                                <option value="x">13</option>
                            </select>
                        </span>
                        cm
                    </p>
                </div>
                <div class="contenedor">

                    <div class="uno">
                        <img src="<?= $dir ?>/img/6.png" alt="">
                    </div>

                    <p>

                        <p>
                            P =
                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">11</option>
                                    <option value="x">12</option>
                                    <option value="n">13</option>
                                </select>
                            </span>
                            cm
                        </p>
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
function result_tipo_4_4_19() {
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
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>