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

                    </div>
                    <p>
                        Equilátero
                    </p>
                    <p>
                        AB =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">3 cm</option>
                                <option value="x">2 cm</option>
                                <option value="x">1 cm</option>
                                <option value="X">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        BC =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2 cm</option>
                                <option value="X">4 cm</option>
                                <option value="n">3 cm</option>
                                <option value="x">1 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        AC =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="X">4 cm</option>
                                <option value="x">2 cm</option>
                                <option value="x">1 cm</option>
                                <option value="n">3 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Perímetro =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">12 cm</option>
                                <option value="n">9 cm</option>
                                <option value="x">10 cm</option>
                                <option value="X">8 cm</option>
                            </select>
                        </span>
                    </p>


                </div>
                <div class="contenedor">

                    <div class="dos">

                    </div>

                    <p>
                        Escaleno
                    </p>
                    <p>
                        MN =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">3 cm</option>
                                <option value="x">2 cm</option>
                                <option value="x">1 cm</option>
                                <option value="n">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        NL =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="X">4 cm</option>
                                <option value="x">3 cm</option>
                                <option value="n">2 cm</option>
                                <option value="x">1 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        ML =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="X">4 cm</option>
                                <option value="x">2 cm</option>
                                <option value="x">1 cm</option>
                                <option value="n">3 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Perímetro =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="n">9 cm</option>
                                <option value="x">12 cm</option>
                                <option value="x">10 cm</option>
                                <option value="X">8 cm</option>
                            </select>
                        </span>
                    </p>



                </div>
                <div class="contenedor">

                    <div class="tres">

                    </div>

                    <p>
                        Isóceles
                    </p>
                    <p>
                        PQ =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">3 cm</option>
                                <option value="x">2 cm</option>
                                <option value="n">1 cm</option>
                                <option value="X">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        QR =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2 cm</option>
                                <option value="n">4 cm</option>
                                <option value="x">3 cm</option>
                                <option value="x">1 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        PR =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2 cm</option>
                                <option value="x">1 cm</option>
                                <option value="x">3 cm</option>
                                <option value="n">4 cm</option>
                            </select>
                        </span>
                    </p>
                    <p>
                        Perímetro =
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">12 cm</option>
                                <option value="x">10 cm</option>
                                <option value="n">9 cm</option>
                                <option value="X">8 cm</option>
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
function result_tipo_4_3_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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