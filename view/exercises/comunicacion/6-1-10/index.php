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
        <div class="content">
            <div class="info">
                <p>Los sustantivos <span class="contenedor" alt="3"></span> clasifican y designan a cualquier persona,
                    objeto o animal de una misma clase.</p>
                <p>Los sustantivos <span class="contenedor" alt="2"></span> distinguen un nombre entre todos los de su
                    clase.</p>
                <p>Los sustantivos <span class="contenedor" alt="5"></span> expresan una unidad: persona, árbol, abeja.
                </p>
                <p>Los sustantivos <span class="contenedor" alt="1"></span> son los que tienen una forma singular y
                    significan una pluralidad: muchedumbre, arboleda, enjambre.</p>
                <p>Son sustantivos <span class="contenedor" alt="4"></span> los que se refieren a personas, animales y
                    cosas precisos y determinados.</p>
                <p>Son sustantivos <span class="contenedor" alt="6"></span> los que indican cosas que no podemos ver.
                </p>
            </div>
            <div class="cajas">
                <div class="pieza item" alt="1">colectivos</div>
                <div class="pieza item" alt="2">propios</div>
                <div class="pieza item" alt="3">comunes</div>
                <div class="pieza item" alt="4">concretos</div>
                <div class="pieza item" alt="5">individuales</div>
                <div class="pieza item" alt="6">abstractos</div>
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
function result_tipo_6_1_10() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }
}
</script>