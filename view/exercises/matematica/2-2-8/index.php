<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<div class="container-two">
    <div class="row">
        <div class="campo" id="palabras">
            <ul id="listA">
                <li>
                    <p class="pre"> • El número anterior a 871 es:</p>
                    <div class="option">
                        <span class="a" alt="">860</span>/
                        <span class="a" alt="">872</span>/
                        <span class="a" alt="n">870</span>
                    </div>
                </li>
                <li>
                <p class="pre"> • El número posterior a 982 es:</p>
                    <div class="option">
                        <span class="a" alt="">981</span>/
                        <span class="a" alt="n">983</span>/
                        <span class="a" alt="">980</span>
                    </div>
                </li>
                <li>
                <p class="pre"> • El número que está entre 745 y 747 es:</p>
                    <div class="option">
                        <span class="a" alt="n">746</span>/
                        <span class="a" alt="">744</span>/
                        <span class="a" alt="">748</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/8/respuesta.png">
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

function result_tipo_2_2_8() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>