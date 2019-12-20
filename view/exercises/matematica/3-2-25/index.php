<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <div class="row">
            <div class="col l3">
                <center>
                    <div class="grid-img">
                        <img src="<?=$dir?>/img/principal.png" class="img materialboxed">
                    </div>
                </center>
            </div>
            <div class="col l9">
                <div class="grid-head">
                    <div class="item c">Cupcakes preferidos</div>
                    <div class="item c">Hombres</div>
                    <div class="item c">Mujeres</div>
                    <div class="item c">Total</div>
                </div>
                <div class="grid-contenedor">
                    <div class="item c"><img src="<?=$dir?>/img/1.png" class="img-o"></div>
                    <div class="item">
                        <select class="seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="6">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="10">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>

                    <div class="item c"><img src="<?=$dir?>/img/2.png" class="img-o"></div>
                    <div class="item">
                        <select class="seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="5">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="12">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>

                    <div class="item c"><img src="<?=$dir?>/img/3.png" class="img-o"></div>
                    <div class="item">
                        <select class="seleccion" alt="10">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="17">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>

                    <div class="item c"><img src="<?=$dir?>/img/4.png" class="img-o"></div>
                    <div class="item">
                        <select class="seleccion" alt="3">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="4">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item">
                        <select class="seleccion" alt="7">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>

                    <div class="item c">Total</div>
                    <div class="item c">
                        <select class="seleccion" alt="24">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item c">
                        <select class="seleccion" alt="22">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
                        </select>
                    </div>
                    <div class="item c">
                        <select class="seleccion" alt="46">
                            <option value="" disabled selected></option>
                            <?php foreach (range(1, 100) as $num) {
                                    echo "<option value='$num'>$num</option>";
                                } ?>
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
<?php require('../../../tools/botones/botones.php');?><script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_3_2_25() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
    if (r == 15) {
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