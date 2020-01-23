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
                <div class="contenedor-x contenedor uno" alt="hiato">
                    <span>Hiato</span>
                </div>
                <div class="contenedor-x contenedor uno" alt="diptongo">
                    <span>Diptongo</span>
                </div>
            </div>
            <div class="contenedor-palabras">
                <span class="palabra pieza" alt="hiato">
                    coartada
                </span>
                <span class="palabra pieza" alt="hiato">
                    teatro
                </span>
                <span class="palabra pieza" alt="hiato">
                    paseo
                </span>
                <span class="palabra pieza" alt="hiato">
                    paella
                </span>
                <span class="palabra pieza" alt="diptongo">
                    aire
                </span>
                <span class="palabra pieza" alt="diptongo">
                    quiosco
                </span>
                <span class="palabra pieza" alt="diptongo">
                    ruido
                </span>
                <span class="palabra pieza" alt="diptongo">
                    viaje
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
<?php require('../../../tools/botones/botones.php');?> <script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_4_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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