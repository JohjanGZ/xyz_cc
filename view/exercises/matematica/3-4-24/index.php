<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
$num = array('1','2','36','4','5','10','6','15','7','18','12','21','34');
$cursos = array('otros','ir a la montaña','el paseo','viaje cultural','ir a la playa');
?>
<div class="container-two">
<span class="pregunta"><span>•</span> Un grupo de amigos estaba organizando las vacaciones de verano y decidieron hacer una
        encuesta para ver qué prefería la mayoría.</span>
    <div class="row">
        <div class="col l5">
            <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
        </div>
        <div class="col l7">
            <div class="pre">
                <span class="pregunta-p"><span>a.</span> ¿Cuántos eligieron ir a la playa?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="36">
                            <option value="" disabled selected></option>
                            <?php foreach ($num as $key => $n) {
                            echo "<option value='$n'>$n</option>";
                        } ?>
                        </select>
                    </div>
                    <span>niños.</span>
                </div>
            </div>
            <div class="pre">
                <span class="pregunta-p"><span>b.</span> ¿Cuántos eligieron ir a la montaña?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="10">
                            <option value="" disabled selected></option>
                            <?php foreach ($num as $key => $n) {
                            echo "<option value='$n'>$n</option>";
                        } ?>
                        </select>
                    </div>
                    <span>niños.</span>
                </div>
            </div>
            <div class="pre">
                <span class="pregunta-p"><span>d.</span> ¿Qué actividades obtuvieron el mismo puntaje?</span>
                <div class="resp">
                    <span>El viaje cultural y</span>
                    <div class="slc">
                        <select class="seleccion" alt="el paseo">
                            <option value="" disabled selected></option>
                            <?php foreach ($cursos as $key => $c) {
                            echo "<option value='$c'>$c</option>";
                        } ?>
                        </select>
                    </div>
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

function result_tipo_3_4_24() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
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