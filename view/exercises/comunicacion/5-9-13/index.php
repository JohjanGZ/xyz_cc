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
                    El <span class="seleccion" alt="n">pasiente</span> <span class="seleccion" alt="">estaba</span> <span class="seleccion" alt="">vencido</span> por el <span class="seleccion" alt="n">cansansio</span>. <span class="seleccion" alt="">Dormitaba</span> en la <span class="seleccion" alt="">banca</span> <span class="seleccion" alt="">antes</span> de su <span class="seleccion" alt="">atención</span>.
                    Se <span class="seleccion" alt="">sentía</span> <span class="seleccion" alt="">mejor</span> de <span class="seleccion" alt="">manera</span> <span class="seleccion" alt="">parcial</span>. <span class="seleccion" alt="">Convencido</span> de que <span class="seleccion" alt="">estaba</span> <span class="seleccion" alt="">mucho</span> <span class="seleccion" alt="">mejor</span>, se <span class="seleccion" alt="">levanto</span> y
                    fue hacia la <span class="seleccion" alt="">puerta</span>. <span class="seleccion" alt="">Quiso</span> <span class="seleccion" alt="">comprarse</span> un <span class="seleccion" alt="n">cafesito</span>, y se <span class="seleccion" alt="">desmayó</span>.
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

function result_tipo_5_9_13() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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