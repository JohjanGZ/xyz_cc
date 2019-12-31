<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros= array('40','50','60','70','80','90','100','110','120','130','140','150');
    $numeros2= array('97','103','108','113','118','123','128','133','142');
?>
<body>
    <div class="container-two">
        <div class="cajas">
            <div class="image">
                <div class="imagen">
                    <div class="box boxuno largo" alt="">
                        <select class="slc seleccion" alt="130">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxdos largo" alt="">
                        <select class="slc seleccion" alt="120">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxtres largo" alt="">
                        <select class="slc seleccion" alt="110">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcuatro largo" alt="">
                        <select class="slc seleccion" alt="100">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcinco largo" alt="">
                        <select class="slc seleccion" alt="90">
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
                    <div class="box boxuno largo" alt="">
                        <select class="slc seleccion" alt="128">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxdos largo" alt="">
                        <select class="slc seleccion" alt="123">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxtres largo" alt="">
                        <select class="slc seleccion" alt="118">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcuatro largo" alt="">
                        <select class="slc seleccion" alt="113">
                            <option value="" disabled selected></option>
                            <?php foreach($numeros2 as $o): ?>
                                    <option value='<?= $o ?>'><?= $o ?></option>";
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="box boxcinco largo" alt="">
                        <select class="slc seleccion" alt="108">
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
function result_tipo_2_8_21() {
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