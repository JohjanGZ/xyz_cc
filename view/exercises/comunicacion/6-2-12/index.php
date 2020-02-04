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
            <div class="item">
                <div class="oracion">a. Una persona con síndrome de Down no es capaz de trabajar.</div>
                <div class="options">
                    <div class="seleccion">V</div>
                    <div class="seleccion" alt="n">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">b. El tío de Nacho también tiene síndrome de Down.</div>
                <div class="options">
                    <div class="seleccion" alt="n">V</div>
                    <div class="seleccion" >F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">c. José es una persona muy inocente.</div>
                <div class="options">
                    <div class="seleccion" alt="n">V</div>
                    <div class="seleccion" >F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">d. José cumple también deberes en su casa.</div>
                <div class="options">
                    <div class="seleccion" alt="n">V</div>
                    <div class="seleccion">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">e. El síndrome de Down se puede curar.</div>
                <div class="options">
                    <div class="seleccion">V</div>
                    <div class="seleccion" alt="n">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">f. Si le pides a José que ponga la mano en el fuego, él lo hará.</div>
                <div class="options">
                    <div class="seleccion">V</div>
                    <div class="seleccion" alt="n">F</div>
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

function result_tipo_6_2_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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