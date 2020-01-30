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
        <div class="title">
            <h4>•¿Quiénes participan en la creación de un manual de uso?</h4>
        </div>
        <div class="contenedor-oraciones ale">
            <div class="oracion ">
                <div class="contenedor-check">
                    <div class="seleccion" alt="">•Editor-corrector-redactor-diagramador.</div>
                </div>
            </div>
            <div class="oracion">
                <div class="contenedor-check">
                    <div class="seleccion" alt="">•Verificador-redactor-corrector.</div>
                </div>
            </div>
            <div class="oracion">
                <div class="contenedor-check">
                    <div class="seleccion" alt="">•Redactor-corrector-editor.</div>
                </div>
            </div>
            <div class="oracion">
                <div class="contenedor-check">
                    <div class="seleccion" alt="n">•Diagramador-redactor-editor.</div>
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
listar_random(".ale")
function result_tipo_5_8_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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