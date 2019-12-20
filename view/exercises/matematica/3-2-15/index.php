<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php $respuestas = array('6 906','6 573','6 727','5 993','5 660','5 814','3 976','3 643','3 797','5 329','4 996','5 150'); ?>

<body>

    <div class="container-two">
        <div class="grid-contenedor">
            <div class="item c"><span class="s">- ↱</span></div>
            <div class="item c">473</div>
            <div class="item c">627</div>
            <div class="item c">294</div>
            <div class="item c">5 623</div>
            <div class="item">
                <select class="seleccion" alt="5 150">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="4 996">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="5 329">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item c">4 270</div>
            <div class="item">
                <select class="seleccion" alt="3 797">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="3 643">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="3 976">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item c">6 287</div>
            <div class="item">
                <select class="seleccion" alt="5 814">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="5 660">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="5 993">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item c">7 200</div>
            <div class="item">
                <select class="seleccion" alt="6 727">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="6 573">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
            </div>
            <div class="item">
                <select class="seleccion" alt="6 906">
                    <option value="" disabled selected></option>
                    <?php foreach ($respuestas as $key => $rspta) {
                        echo "<option value='$rspta'>$rspta</option>";
                    } ?>
                </select>
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
// Validar
function result_tipo_3_2_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 12) {
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