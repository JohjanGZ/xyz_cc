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
            <div class="info">
                <p>a. Desde hace años, en el pensamiento popular se encuentra instaurada la idea de que la
                    segunda estrategia es <span class="contenedor" alt="1"></span>.</p>
                <p>b. El número de comidas a lo largo del día es absolutamente <span class="contenedor" alt="2"></span> con respecto
                    al tipo de alimentos que consumimos.</p>
                <p>c. Una de las teorías que apoya las cinco comidas al día se basa en el <span class="contenedor" alt="5"></span>
                    de los alimentos.</p>
                <p>d. (…) advierte Bárbara Sánchez, <span class="contenedor" alt="4"></span> del C.F. Leganés.</p>
                <p>e. Es decir, no es lo mismo tomar a media mañana una bolsa de papas fritas, que comerse
                    una manzana o un puñado de <span class="contenedor" alt="3"></span>.</p>
            </div>
            <div class="cajas">
                <div class="pieza item" alt="1">la buena</div>
                <div class="pieza item" alt="2">secundario</div>
                <div class="pieza item" alt="3">pasas o maníes</div>
                <div class="pieza item" alt="4">dietista-nutricionista</div>
                <div class="pieza item" alt="5">efecto termogénico</div>
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
    function result_tipo_6_3_6() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 5) {
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