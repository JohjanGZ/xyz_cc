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
            <div class="item seleccion" alt="n">7 814</div>
            <div class="item seleccion" alt="">7 148</div>
            <div class="item seleccion" alt="n">8 005</div>
            <div class="item seleccion" alt="n">7 841</div>
            <div class="item seleccion" alt="n">8 907</div>
            <div class="item seleccion" alt="">6 974</div>
            <div class="item seleccion" alt="">7 018</div>
            <div class="item seleccion" alt="">6 976</div>
            <div class="item seleccion" alt="">5 099</div>
            <div class="item seleccion" alt="n">7 275</div>
            <div class="item seleccion" alt="n">7 418</div>
            <div class="item seleccion" alt="">3 197</div>
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
function result_tipo_4_1_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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