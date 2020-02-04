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
                <div class="title">
                    <h5>Es falso que ella esté menos <span>cualificada</span> que él para el trabajo.</h5>
                </div>
                <div class="contenedor-check">
                    <div class="seleccion" alt=""><span>•</span>Grado superlativo.</div>
                    <div class="seleccion" alt=""><span>•</span>Grado positivo.</div>
                    <div class="seleccion" alt="n"><span>•</span>Grado comparativo de inferioridad.</div>
                    <div class="seleccion" alt=""><span>•</span>Grado comparativo de superioridad.</div>
                </div>
            </div>
            <div class="oracion">
                <div class="title">
                    <h5>La poesía de César Vallejo es <span>impresionante</span>.</h5>
                </div>
                <div class="contenedor-check">
                    <div class="seleccion" alt=""><span>•</span>Grado superlativo.</div>
                    <div class="seleccion" alt="n"><span>•</span>Grado positivo.</div>
                    <div class="seleccion" alt=""><span>•</span>Grado comparativo de inferioridad</div>
                    <div class="seleccion" alt=""><span>•</span>Grado comparativo de superioridad.</div>
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

function result_tipo_6_2_2() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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