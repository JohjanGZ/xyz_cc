<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('>','=','<');
?>

<body>
    <div class="container-two">
        <span class="title">Halla la longitud de la circunferencia cuyo radio mide:</span>
        <div class="two-grid">
            <div class="grid">
                <div class="eje-item">
                    <span>a.</span> 15 cm
                </div>
                <div class="eje-item">
                    <span>C =</span>
                    <select class="browser-default seleccion" alt="94.2">
                        <option value="" disabled selected></option>
                        <option value="94.2">94.2 cm</option>
                        <option value="95.2">95.2 cm</option>
                        <option value="98.2">98.2 cm</option>
                        <option value="92.2">92.2 cm</option>
                    </select>
                </div>
            </div>
            <div class="grid">
                <div class="eje-item">
                    <span>b.</span> 8 cm
                </div>
                <div class="eje-item">
                    <span>C =</span>
                    <select class="browser-default seleccion" alt="50.24">
                        <option value="" disabled selected></option>
                        <option value="52.24">52.24 cm</option>
                        <option value="51.24">51.24 cm</option>
                        <option value="50.24">50.24 cm</option>
                        <option value="24.24">24.24 cm</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
                <img class="materialboxed" width="80%" src="<?=$dir?>/img/respuesta.png">
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
function result_tipo_4_6_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 2) {
        // console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        // console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>