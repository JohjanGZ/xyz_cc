<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="contenedor-oraciones">
            <div class="oracion">
                <span>•</span> Mañana voy a ___________________ con unas patas del salón.
                <div class="contenedor-check">
                    <div class="seleccion" alt="">jugar</div>
                    <div class="seleccion" alt="">fulbitear</div>
                    <div class="seleccion" alt="n">pichanguear</div>
                    <div class="seleccion" alt="">correr</div>
                </div>
            </div>
            <div class="oracion">
                <span>•</span> Saqué un gol de la ___________________, cuando ya terminaba el partido.
                <div class="contenedor-check">
                    <div class="seleccion" alt="">línea</div>
                    <div class="seleccion" alt="">límite</div>
                    <div class="seleccion" alt="">cancha</div>
                    <div class="seleccion" alt="n">raya</div>
                </div>
            </div>
            <div class="oracion">
                <span>•</span> Ya estamos inscritos con un nombre bravazo: ___________________.
                <div class="contenedor-check">
                    <div class="seleccion" alt="">Tennis Club</div>
                    <div class="seleccion" alt="n">Suave Loco</div>
                    <div class="seleccion" alt="">Bayern</div>
                    <div class="seleccion" alt="">Surquillo</div>
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

function result_tipo_5_0_3() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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