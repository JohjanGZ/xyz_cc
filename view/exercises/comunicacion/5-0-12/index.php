<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="grid">
            <div class="esquema">
                <img src="<?=$dir?>/img/principal.png" class="principal">
                <div class="text">
                    <span class="seleccion" alt="">Mientras</span> <span class="seleccion" alt="n">dormía</span> <span class="seleccion" alt="">soñaba</span> que era un <span class="seleccion" alt="n">héroe</span>. <span class="seleccion" alt="">Montaba</span> un <span class="seleccion" alt="">caballo</span> <span class="seleccion" alt="">blanco</span>
                    de <span class="seleccion" alt="">crines</span> <span class="seleccion" alt="">relucientes</span> y  <span class="seleccion" alt="n">tenía</span> una <span class="seleccion" alt="">espada</span> <span class="seleccion" alt="">brillante</span>. Se <span class="seleccion" alt="">enfrentaba</span> con
                    los <span class="seleccion" alt="">gigantes</span> del <span class="seleccion" alt="n">maíz</span>. Los <span class="seleccion" alt="">gigantes</span> <span class="seleccion" alt="">montaban</span> un <span class="seleccion" alt="n">león</span> de gran <span class="seleccion" alt="">melena</span>.
                    Sus <span class="seleccion" alt="">rugidos</span> <span class="seleccion" alt="n">estentóreos</span> <span class="seleccion" alt="n">atemorizarían</span> a cualquiera, pero <span class="seleccion" alt="n">Saúl</span>, no
                    estaba <span class="seleccion" alt="">asustado</span> sino <span class="seleccion" alt="">emocionado</span>. Ni siquiera estaba <span class="seleccion" alt="">nervioso</span>.
                    Avanzaba con su <span class="seleccion" alt="">espada</span> en <span class="seleccion" alt="">alto</span> y <span class="seleccion" alt="">mientras</span> más se <span class="seleccion" alt="">acercaba</span> los
                    <span class="seleccion" alt="">gigantes</span> <span class="seleccion" alt="">temblaban</span>. <span class="seleccion" alt="">Empuñó</span> su <span class="seleccion" alt="">espada</span>, estaba a <span class="seleccion" alt="">punto</span> de dar el
                    <span class="seleccion" alt="">primer</span> <span class="seleccion" alt="">golpe</span>… y su <span class="seleccion" alt="">frazada</span> <span class="seleccion" alt="">salió</span> <span class="seleccion" alt="">volando</span> por los <span class="seleccion" alt="">aires</span>.
                </div>
            </div>
        </div>
    </div>


    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Respuesta correcta</h4>
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
// Validar

function result_tipo_5_0_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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