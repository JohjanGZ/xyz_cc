<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="col l5">
            <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
        </div>
        <div class="col l7">
            <p class="pregunta"><span>•</span> Sandra compró una bolsa con 90 paletas de caramelo. Luego formó bolsitas
                con 8 paletas de
                caramelos cada una. ¿Cuántas bolsas formó?¿Cuántas paletas sobraron? </p>
            <div class="grid-container">
                <div class="seleccion" alt="n">
                    Formó 11 bolsas y le sobraron 2 paletas.
                </div>
                <div class="seleccion">
                    Formó 16 bolsas y no le sobraron paletas.
                </div>
                <div class="seleccion">
                    Formó 10 bolsas y le sobraron 3 paletas.
                </div>
                <div class="seleccion">
                    Formó 12 bolsas y le sobra 1 paleta.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
// Formulario - Registrados

function result_tipo_3_4_17() {
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