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
        <img src="<?=$dir?>/img/principal.png" class="principal">
        <div class="two-grid">
            <div class="grid">
                <div class="eje-item">
                    A<span>sombreada</span><span class="s">=</span>
                </div>
                <div class="eje-item">
                    <img src="<?=$dir?>/img/1.png" class="img">
                </div>
            </div>
            <div class="grid">
                <div class="eje-item">
                    A<span>sombreada</span><span class="s">=</span>
                </div>
                <div class="eje-item">
                    <select class="browser-default seleccion" alt="2">
                        <option value="" disabled selected></option>
                        <option value="2">2πr2</option>
                        <option value="4">4πr2</option>
                        <option value="3">3πr2</option>
                        <option value="6">6πr2</option>
                    </select>
                    <span class="s">-</span>
                    <select class="browser-default seleccion" alt="1/2">
                        <option value="" disabled selected></option>
                        <option value="1/2">1/2πr2</option>
                        <option value="4/2">4/2πr2</option>
                        <option value="3/2">3/2πr2</option>
                        <option value="2/2">2/2πr2</option>
                    </select>
                </div>
            </div>
            <div class="grid">
                <div class="eje-item">
                    A<span>sombreada</span><span class="s">=</span>
                </div>
                <div class="eje-item">
                    <select class="browser-default seleccion" alt="3/2">
                        <option value="" disabled selected></option>
                        <option value="1/2">1/2πr2</option>
                        <option value="3/2">3/2πr2</option>
                        <option value="4/2">4/2πr2</option>
                        <option value="6/2">6/2πr2</option>
                    </select>
                    cm2
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
function result_tipo_4_6_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    r = 0;
    seleccion_lista();
    if (r == 3) {
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