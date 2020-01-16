<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $respuestas = array('8; 4','8; 10','6; 8','2; 2','10; 8','10; 2','2; 4','4; 4','4; 2','2; 3','6; 9','12; 6','12; 12','6; 12');
$redujo = array('mitad','tercera','cuarta'); ?>

<body>

    <div class="container-two">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab"><a class="active" href="#figura1">Figura 1</a></li>
            <li class="tab"><a href="#figura2">Figura 2</a></li>
        </ul>
        <div id="figura1" class="col s12">
            <div class="row">
                <div class="col l6">
                    <h6 class="plano"></h6>
                    <div class="grid-options">
                        <div class="datos">
                            I <span>= {</span>
                            <select class="seleccion" alt="6; 9">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            J <span>= {</span>
                            <select class="seleccion" alt="12; 6">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            K <span>= {</span>
                            <select class="seleccion" alt="12; 12">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            L <span>= {</span>
                            <select class="seleccion" alt="6; 12">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                    </div>
                </div>
                <div class="col l6">
                    <img src="<?=$dir?>/img/1.png" class="img materialboxed">
                </div>
            </div>
        </div>
        <div id="figura2" class="col s12">
            <div class="row">
                <div class="col l6">
                    <img src="<?=$dir?>/img/2.png" class="img materialboxed">
                </div>
                <div class="col l6">
                    <h6 class="plano"></h6>
                    <div class="grid-options">
                        <div class="datos">
                            I <span>= {</span>
                            <select class="seleccion" alt="2; 3">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            J <span>= {</span>
                            <select class="seleccion" alt="4; 2">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            K <span>= {</span>
                            <select class="seleccion" alt="4; 4">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                        <div class="datos">
                            L <span>= {</span>
                            <select class="seleccion" alt="2; 4">
                                <option value="" disabled selected></option>
                                <?php foreach ($respuestas as $key => $rspta) {
                                    echo "<option value='$rspta'>$rspta</option>";
                                } ?>
                            </select>
                            <span>}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pregunta">
            <span class="rspta">Respuesta:</span>
            <span>Se redujo a la</span>
            <select class="seleccion" alt="tercera">
                <option value="" disabled selected></option>
                <?php foreach ($redujo as $key => $pst) {
                    echo "<option value='$pst'>$pst</option>";
                } ?>
            </select>
            <span>parte.</span>
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
// Validar
function result_tipo_3_7_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0
    seleccion_lista();
    if (r == 9) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r);
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>