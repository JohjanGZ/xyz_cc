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
                <div class="oracion">a. Un mapa no puede contener más de un concepto.</div>
                <div class="options">
                    <div class="seleccion">V</div>
                    <div class="seleccion" alt="n">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">b. Los conectores son sustantivos que se cierran enrecuadros u óvalos.</div>
                <div class="options">
                    <div class="seleccion">V</div>
                    <div class="seleccion" alt="n">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">c. Los conectores pueden ser preposiciones.</div>
                <div class="options">
                    <div class="seleccion" alt="n">V</div>
                    <div class="seleccion" >F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">d. El mapa conceptual es una herramienta gráfica.</div>
                <div class="options">
                    <div class="seleccion" alt="n">V</div>
                    <div class="seleccion">F</div>
                </div>
            </div>
            <div class="item">
                <div class="oracion">e. El mapa conceptual se utiliza para parafrasear una idea.</div>
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

function result_tipo_6_1_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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