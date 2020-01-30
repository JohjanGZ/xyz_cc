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
                <div class="pregunta">
                    <div class="d-flex"><span>•</span> Los determinantes son palabras que acompañan a los <div class="contenedor" alt="sustantivos"></div> para</div>
                    <div class="d-flex"> <div class="contenedor" alt="concretarlos"></div> y limitar su significado.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="">verbos</div>
                    <div class="pieza" alt="">indicarlos</div>
                    <div class="pieza" alt="">adjetivarlos</div>
                    <div class="pieza" alt="">calificarlos</div>
                    <div class="pieza" alt="sustantivos">sustantivos</div>
                    <div class="pieza" alt="concretarlos">concretarlos</div>
                    <div class="pieza" alt="">ordenarlos</div>
                    <div class="pieza" alt="">enunciarlos</div>
                    <div class="pieza" alt="">adjetivos</div>
                    <div class="pieza" alt="">pronombres</div>
                    <div class="pieza" alt="">estructurado</div>
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

function result_tipo_5_3_10() {
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