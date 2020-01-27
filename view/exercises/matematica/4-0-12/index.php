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


                <div class="ejercicio" style="font-weight: bold;font-size: 1.8rem!important;">

                    <p>
                        <span>D = </span> { 1; 2; 3; 4; 5; 6; 7 }
                    </p>
                    <p>
                        <span>E = </span> { 1; 3; 5; 6; 7 }
                    </p>
                    <p>
                        <span>F = </span> { 2; 4; 6; 7 }
                    </p>
                </div>
                <div class="ejercicio combinar">

                    <p>
                        D <span>-</span> E = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">1; 3; 5; 6; 7</option>
                                <option value="x">1; 3; 5</option>
                                <option value="n">2; 4</option>
                                <option value="x">1; 2; 3; 4; 5; 6; 7</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        E <span>-</span> F = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2; 4</option>
                                <option value="n">1; 3; 5</option>
                                <option value="x">2; 4; 5; 7</option>
                                <option value="x">2; 4; 6; 7</option>
                            </select>
                        </span>
                        }
                    </p>
                    <p>
                        D <span>-</span> F = {
                        <span class="select">
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected></option>
                                <option value="x">2; 4; 7</option>
                                <option value="x">2; 5; 6</option>
                                <option value="x">2; 4; 5; 6; 7</option>
                                <option value="n">1; 3; 5</option>
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
function result_tipo_4_0_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

    if (r == 3) {
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