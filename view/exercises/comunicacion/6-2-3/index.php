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
                <div class="pieza item" alt="1">más</div>
                <div class="pieza item" alt="1">más</div>
                <div class="pieza item" alt="2">que</div>
                <div class="pieza item" alt="2">que</div>
                <div class="pieza item" alt="3">menos</div>
                <div class="pieza item" alt="4">tan</div>
                <div class="pieza item" alt="5">el</div>
                <div class="pieza item" alt="6">la</div>
                <div class="pieza item" alt="7">como</div>
                <div class="pieza item" alt="8">ísimo</div>
            </div>
            <div class="info">
                <div>a. Grado positivo.</div>
                <div><p>gracioso</p></div>
                <div>b. Grado superlativo absoluto.</div>
                <div><p>perfect<span class="contenedor" alt="8"></span></p></div>
                <div>c. Grado superlativo relativo.</div>
                <div><p><span class="contenedor" alt="6"></span><span class="contenedor" alt="1"></span>bella</p></div>
                <div>d. Grado comparativo de superioridad.</div>
                <div><p><span class="contenedor" alt="1"></span> interesante <span class="contenedor" alt="2"></span></p></div>
                <div>e. Grado comparativo de igualdad.</div>
                <div><p><span class="contenedor" alt="3"></span> estudioso <span class="contenedor" alt="2"></span></p></div>
                <div>f. Grado comparativo de inferioridad.</div>
                <div><p><span class="contenedor" alt="4"></span> frío <span class="contenedor" alt="7"></span></p></div>
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
    function result_tipo_6_2_3() {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        if (r == 9) {
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