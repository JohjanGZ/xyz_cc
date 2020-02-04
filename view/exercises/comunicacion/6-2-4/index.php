<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?= $titulo ?>

<body>

    <div class="contenedor-two">
        <div class="content">
            <div class="cajas">
                <div class="item">¡Mira esto que conseguí! <span class="pieza" alt="1">A</span></div>
                <div class="item">Chicas, ¿me van a ayudar a terminar la tarea? <span class="pieza" alt="2">B</span></div>
                <div class="item">Claro que sí, estamos investigando en Internet. <span class="pieza" alt="3">C</span></div>
                <div class="item">¡Se ve genial! <span class="pieza" alt="4">D</span></div>
            </div>
            <div class="image">
                <div class="box box1 contenedor" alt="1"></div>
                <div class="box box2 contenedor" alt="4"></div>
                <div class="box box3 contenedor" alt="3"></div>
                <div class="box box4 contenedor" alt="2"></div>
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
<?php require('../../../tools/botones/botones.php'); ?> <script>
    $("#next").attr("onclick", "<?= $next ?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
    // Validar
    function result_tipo_6_2_4() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 4) {
            console.log(r)
            localStorage.setItem("Nota<?= $cod ?>", nota);
            localStorage.setItem("Time<?= $cod ?>", tiempo);
            correcto();
        } else {
            incorrecto();
            console.log(r)
            localStorage.setItem("Nota<?= $cod ?>", "0");
            localStorage.setItem("Time<?= $cod ?>", tiempo);
        }
    }
</script>