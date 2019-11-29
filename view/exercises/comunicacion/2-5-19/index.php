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

            <div class="contenedor-ejercicio">
                <div class="contenedor-x" alt="f">
                    <span>Femenino</span>
                </div>
                <div class="contenedor-x" alt="m">
                    <span>Masculino</span>
                </div>
            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="f">
                    amiga
                </span>
                <span class="palabra pieza" alt="f">
                    piñata
                </span>
                <span class="palabra pieza" alt="f">
                    silla
                </span>
                <span class="palabra pieza" alt="f">
                    doctora
                </span>
                <span class="palabra pieza" alt="f">
                    zanahoria
                </span>
                <span class="palabra pieza" alt="f">
                    flor
                </span>
                <span class="palabra pieza" alt="m">
                    martillo
                </span>
                <span class="palabra pieza" alt="m">
                    maestro
                </span>
                <span class="palabra pieza" alt="m">
                    tendedero
                </span>
                <span class="palabra pieza" alt="m">
                    macetero
                </span>
                <span class="palabra pieza" alt="m">
                    gato
                </span>
                <span class="palabra pieza" alt="m">
                    lápiz
                </span>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_5_19() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 12) {
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