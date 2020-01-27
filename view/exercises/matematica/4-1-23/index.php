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
        <div class="image">
            <img src="<?= $dir ?>/img/1.png" alt="">
        </div>
        <div class="preguntas">
            <div class="pregunta">
            ¿Cuántas personas fueron encuestadas?
            </div>
            <div class="options">
                <span class="seleccion">88</span>
                <span class="seleccion" alt="n">78</span>
                <span class="seleccion">68</span>
            </div>
            <div class="pregunta">
            ¿Cuál es el producto de limpieza que prefieren?
            </div>
            <div class="options">
                <span class="seleccion">Cera</span>
                <span class="seleccion">Lejía</span>
                <span class="seleccion" alt="n">Detergente</span>
            </div>
            <div class="pregunta">
            ¿Cuál es el producto de limpieza que no prefieren?
            </div>
            <div class="options">
                <span class="seleccion" alt="n">Cera</span>
                <span class="seleccion">Quita manchas</span>
                <span class="seleccion">Detergente</span>
            </div>
            <div class="pregunta">
            ¿Cuántas prefieren detergente?
            </div>
            <div class="options">
                <span class="seleccion">19</span>
                <span class="seleccion">21</span>
                <span class="seleccion" alt="n">20</span>
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
<?php require('../../../tools/botones/botones.php');?><script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_1_23() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {+
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>