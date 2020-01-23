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
        <div class="contenido aleatorio">
            <div class="item seleccion" alt="">5 962</div>
            <div class="item seleccion" alt="">5 701</div>
            <div class="item seleccion" alt="">7 021</div>
            <div class="item seleccion" alt="">8 345</div>
            <div class="item seleccion" alt="">5 792</div>
            <div class="item seleccion" alt="">9 324</div>
            <div class="item seleccion" alt="">7 284</div>
            <div class="item seleccion" alt="n">5 629</div>
            <div class="item seleccion" alt="n">4 897</div>
            <div class="item seleccion" alt="n">4 176</div>
            <div class="item seleccion" alt="n">3 624</div>
            <div class="item seleccion" alt="n">5 016</div>
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_1_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

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