<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="container">
        <div class="row">

            <div class="contenedor-ejercicios">
                <div class="ejercicio">
                    
                    <div class="contenedor-respuesta">
                        <p>
                        <span class="celeste">●</span> La pelota <b>re</b><span class="palabra" alt="bota">x</span> contra la pared varias veces.
                        </p>
                        <p>
                        <span class="celeste">●</span> Esta alga <b>sub</b><span class="palabra" alt="acuatica">x</span> vive bajo el agua.
                        </p>
                        <p>
                        <span class="celeste">●</span> El piano está <b>des</b><span class="palabra" alt="afinado">x</span> y no suena bien.
                        </p>
                        <p>
                        <span class="celeste">●</span> Siempre <b>re</b><span class="palabra" alt="calienta">x</span> la leche porque le parece fría.
                        </p>
                        <p>
                        <span class="celeste">●</span> Practica la pesca <b>sub</b><span class="palabra" alt="marina">x</span> en el norte del país.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="marina">marina</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="acuatica">acuática</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="afinado">afinado</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="bota">bota</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="calienta">calienta</h4>
                </li>
            </ul>
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
function result_tipo_4_0_5() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
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