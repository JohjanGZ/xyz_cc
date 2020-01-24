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
                        <span>a.</span> P es el conjunto de letras de la palabra <span>cantidad</span>
                    </h4>
                    <p>
                        P = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="n">c, a, n, t, i, d</option>
                                <option value="x">c, a, n, t, i, d, a, d</option>
                                <option value="x">a, n, t, i, d, a</option>
                                <option value="x"> a, n, c, t, i</option>

                            </select>
                        </span>
                        }
                    </p>
                </div>
                <div class="ejercicio">
                    <h4>
                        <span>a.</span> Q es el conjunto de los números pares entre <span>40 y 51</span>
                    </h4>
                    <p>
                        Q = {
                        <span>
                            <select class="browser-default seleccion" alt="n">
                                <option value="" disabled selected>Escoge una opción</option>
                                <option value="x">41; 42; 43; 44; 45; 46; 47; 48; 49; 50</option>
                                <option value="x">41; 43; 45; 47; 49</option>
                                <option value="n">42; 44; 46; 48; 50</option>
                                <option value="x">45; 49; 42; 46; 41</option>

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
function result_tipo_4_0_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();

    if (r == 2) {
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