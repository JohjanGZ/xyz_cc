<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php
$num = array('1','20','36','23','5','10','6','15','7','18','12','21','34');
$cursos = array('sopas','bebidas','postres','sándwiches','ensaladas');
?>
<div class="container-two">
    <div class="row">
        <div class="col l5">
            <img src="<?=$dir?>/img/principal.png" class="principal materialboxed">
        </div>
        <div class="col l7">
            <div class="pre">
                <span class="pregunta-p"><span>a.</span> ¿Cuántas personas comieron sándwiches?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="23">
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
                <span class="pregunta-p"><span>b.</span> ¿Cuántas personas comieron ensaladas?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="20">
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
                <span class="pregunta-p"><span>c.</span> ¿Cuántas personas tomaron bebidas?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="21">
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
                <span class="pregunta-p"><span>d.</span> ¿Qué alimentos se vendieron en la misma cantidad?</span>
                <div class="resp">
                    <div class="slc">
                        <select class="seleccion" alt="sopas">
                            <option value="" disabled selected></option>
                            <?php foreach ($cursos as $key => $c) {
                            echo "<option value='$c'>$c</option>";
                        } ?>
                        </select>
                    </div>
                    <span>y</span>
                    <div class="slc">
                        <select class="seleccion" alt="postres">
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

function result_tipo_3_4_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
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