<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros= array('248','238','236','234','232','230','220','210');
    $numeros2= array('68','72','74','76','78','80','82','84','88');
?>
<body>
    <div class="container-two">
        <div class="cajas">
            <div class="image">
                <div class="imagen">
                    <div class="box boxuno largo" alt="">
                        <select class="slc seleccion" alt="238">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxdos largo" alt="">
                        <select class="slc seleccion" alt="236">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxtres largo" alt="">
                        <select class="slc seleccion" alt="234">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcuatro largo" alt="">
                        <select class="slc seleccion" alt="232">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcinco largo" alt="">
                        <select class="slc seleccion" alt="230">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="image">
                <div class="imagen image2">
                    <div class="box boxunos largo" alt="">
                        <select class="slc seleccion" alt="68">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxdoss largo" alt="">
                        <select class="slc seleccion" alt="72">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxtress largo" alt="">
                        <select class="slc seleccion" alt="76">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcuatro largo" alt="">
                        <select class="slc seleccion" alt="84">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcinco largo" alt="">
                        <select class="slc seleccion" alt="80">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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

$('select').formSelect();

// Validar
function result_tipo_2_8_22() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();

    if (r == 10) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>