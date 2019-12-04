<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre') ?>
<div class="container-two">
    <center>
        <img src="<?=$dir?>/img/1.png" class="principal materialboxed">
    </center>
    <div class="grid-container">
        <div class="pregunta">
            <center>
                <p class="text"><span class="al">a.</span>Carlos saca a pasear a su perrito a las 9:00 de la mañana y
                    recorre el parque. Él regresa a casa después de una hora. ¿A qué hora regresa Carlos a su casa?</p>
            </center>
            <div class="options">
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt c1">9:00</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt c2">8:00</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt c3">6:00</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="n" />
                        <span class="txtopt c4">10:00</span>
                    </label>
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

function result_tipo_1_6_13() {
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
<script type="text/javascript" src="../../../exercises/comunicacion/1-0-9/js/validate.js"></script>