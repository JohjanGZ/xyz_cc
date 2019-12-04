<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php $meses = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre') ?>
<div class="container-two">
    <div class="grid-container">
        <div class="pregunta">
            <center>
                <p class="text"><span class="al">a.</span>En una semana, el día lunes está ___________ del día miércoles.</p>
            </center>
            <div class="options">
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="n" />
                        <span class="txtopt">antes</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt">después</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="pregunta">
            <center>
                <p class="text"><span class="al">b.</span>En una semana, el día domingo está ___________ del día sábado.</p>
            </center>
            <div class="options">
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt">antes</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="n" />
                        <span class="txtopt">después</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="pregunta">
            <center>
                <p class="text"><span class="al">c.</span>En una año, el mes de marzo está ___________ del mes de enero.</p>
            </center>
            <div class="options">
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="" />
                        <span class="txtopt">antes</span>
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="checkbox" class="optn" alt="n" />
                        <span class="txtopt">después</span>
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

function result_tipo_1_6_8() {
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