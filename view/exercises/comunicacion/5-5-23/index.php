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
        <div class="content">
            <div class="image">
                <div class="poema">
                    <p class="pieza" alt="oo">Como sirenas de aguas dulces</p>
                    <p class="pieza" alt="oo">Los buses cantaban con voces extrañas</p>
                    <p class="pieza" alt="1">Teteteeee/Titiiiiiit</p>
                    <p class="pieza" alt="2">Era de los buses el diario cancionero</p>
                    <p class="pieza" alt="oo">Pero era la sinfonía de la ciudad</p>
                    <p class="pieza" alt="3">La ciudad sequísima como el desierto</p>
                    <p class="pieza" alt="oo">Que albergaba algunos árboles</p>
                    <p class="pieza" alt="oo">Y algunas flores como sonrisas.</p>
                </div>
            </div>
            <div class="problem">
                <h5>Onomatopeya:</h5>
                <div class="contenedor" alt="1"></div>
                <h5>Hipérbaton:</h5>
                <div class="contenedor" alt="2"></div>
                <h5>Hipérbole:</h5>
                <div class="contenedor" alt="3"></div>
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
function result_tipo_5_5_23() {
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