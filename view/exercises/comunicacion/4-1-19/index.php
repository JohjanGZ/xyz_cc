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

            <div class="contenedor-ejercicio">
                <div class="lectura">
                    <h5>
                        El niño que lo quería todo
                    </h5>
                    <p>
                        Había una vez un niño que se llamaba Jorge; su madre, María, y el padre, Juan. En el día de los
                        Reyes Magos, Jorge pidió más de veinte cosas. Su madre le dijo: <br>
                        —tú piensa en los otros niños, y no te enfades porque tienes que pedir menos.
                        Por fin llegó el día tan esperado. Cuando Jorge se levantó y fue a ver los regalos que le habían
                        traído, se llevó una gran sorpresa. Le habían traído las veinticinco cosas de la lista.
                        Enseguida despertó a sus padres y les dijo que quería repartir sus juguetes con los niños más
                        pobres.
                    </p>
                </div>
                <p class="select">
                El género literario de este texto es: <br>
                    <span>
                        <select class="browser-default seleccion" alt="n">
                            <option value="" disabled selected>Escoge una opción</option>
                            <option value="x">Lírico</option>
                            <option value="n">Narrativo</option>
                            <option value="x">Dramático</option>
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
function result_tipo_4_1_18() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    r = 0;
    seleccion_lista();
    console.log(r);
    if (r == 1) {
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