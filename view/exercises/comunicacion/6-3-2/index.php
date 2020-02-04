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
        <div class="options">
            <div class="pieza numeros" alt="1">1</div>
            <div class="pieza numeros" alt="2">2</div>
            <div class="pieza numeros" alt="3">3</div>
            <div class="pieza numeros" alt="4">4</div>
            <div class="pieza numeros" alt="5">5</div>
        </div>
        <div class="content">
                <div class="contenedor" alt="4"></div>
                <p>Jerarquiza los datos.</p>
                <div class="contenedor" alt="2"></div>
                <p>Coloca los conceptos claves como etiquetas en la parte izquierda de las filas.</p>
                <div class="contenedor" alt="3"></div>
                <p>Coloca en la parte superior de las columnas las ideas o variables que desarrollan los temas.</p>
                <div class="contenedor" alt="5"></div>
                <p>Escribe de lo simple a lo complejo.</p>
                <div class="contenedor" alt="1"></div>
                <p>Lee atentamente el texto.</p>
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
    function result_tipo_6_3_2() {
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