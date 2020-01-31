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

                <div class="xd" >
                    <div class="contenedor">

                        <div class="uno">

                        </div>

                        <p>

                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">2 / 7</option>
                                    <option value="n">2 / 6</option>
                                    <option value="x">6 / 2</option>
                                </select>
                            </span>
                        </p>

                    </div>
                    <div class="contenedor">

                        <div class="dos">

                        </div>

                        <p>

                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">1 / 3</option>
                                    <option value="x">4 / 1</option>
                                    <option value="n">1 / 4</option>
                                </select>
                            </span>
                        </p>

                    </div>
                    <div class="contenedor">

                        <div class="tres">

                        </div>

                        <p>

                            <span class="select">
                                <select class="browser-default seleccion" alt="n">
                                    <option value="" disabled selected></option>
                                    <option value="x">3 / 12</option>
                                    <option value="n">4 / 12</option>
                                    <option value="x">4 / 11</option>
                                </select>
                            </span>
                        </p>

                    </div>
                </div>
                <p>
                    Son fracciones equivalentes:
                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="n">2 / 6</option>
                            <option value="x">1 / 6</option>
                            <option value="x">1 / 4</option>
                        </select>
                    </span>

                    y

                    <span class="select">
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected></option>
                            <option value="x">6 / 6</option>
                            <option value="x">1 / 6</option>
                            <option value="n">4 / 12</option>
                        </select>
                    </span>

                </p>


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
function result_tipo_4_4_6() {
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
        console.log(r);

        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>