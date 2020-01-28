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
                    Mi <span class="seleccion" alt="">hermana</span> <span class="seleccion" alt="">encontró</span> una <span class="seleccion" alt="">bolsa</span> de <span class="seleccion" alt="">cuero</span> que <span class="seleccion" alt="">tenía</span> muchas <span class="seleccion" alt="">monedas</span>
                    de <span class="seleccion" alt="">oro</span>. “¿Qué te vas a <span class="seleccion" alt="">comprar</span>?”, le <span class="seleccion" alt="">pregunté</span>. “Un <span class="seleccion" alt="">camello</span>”, me
                    <span class="seleccion" alt="">respondió</span>. “¿Un <span class="seleccion" alt="">camello</span>?”. “Sí, un <span class="seleccion" alt="">camello</span> <span class="seleccion" alt="n">marrón</span> y <span class="seleccion" alt="n">pequeño</span>”. No
                    podía <span class="seleccion" alt="">creerlo</span>. Yo me <span class="seleccion" alt="">hubiera</span> <span class="seleccion" alt="">comprado</span> una <span class="seleccion" alt="">llama</span> o una <span class="seleccion" alt="">vicuña</span>. Pero ella
                    <span class="seleccion" alt="">estaba</span> <span class="seleccion" alt="">convencida</span> de que un <span class="seleccion" alt="">camello</span> era lo que <span class="seleccion" alt="">necesitaba</span>. Nuestra
                    casa era <span class="seleccion" alt="n">grande</span>, sí, pero no <span class="seleccion" alt="">podíamos</span> criar un camello. <span class="seleccion" alt="">Suficiente</span> con
                    las <span class="seleccion" alt="">cabras</span>, <span class="seleccion" alt="">gallinas</span> y patos que teníamos. El <span class="seleccion" alt="">campo</span> <span class="seleccion" alt="n">verde</span> se extendía
                    hasta donde <span class="seleccion" alt="">nuestros</span> ojos no llegaban. Y mi <span class="seleccion" alt="">hermana</span> quería llegar
                    hasta ese <span class="seleccion" alt="">lugar</span> montada en su <span class="seleccion" alt="">camello</span>.
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

function result_tipo_5_2_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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