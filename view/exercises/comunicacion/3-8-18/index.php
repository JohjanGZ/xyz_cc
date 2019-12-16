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
                <div class="contenedor-imagen">
                    <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
                </div>
                <div class="ejercicio">
                    <div class="contenedor-respuesta">
                        <p>
                           A: <span class="palabra" alt="titular">x</span>
                        </p>
                        <p>
                            B: <span class="palabra" alt="copete">x</span>
                        </p>
                        <p>
                            C: <span class="palabra" alt="imagen">x</span>
                        </p>
                        <p>
                            D: <span class="palabra" alt="cuerpo">x</span>
                        </p>
                        <p>
                            E: <span class="palabra" alt="epigrafe">x</span>
                        </p>
                    </div>
                    <div class="contenedor-palabras">
                        <span class="palabrax pieza" alt="titular">
                            titular
                        </span>
                        <span class="palabrax pieza" alt="copete">
                            copete
                        </span>
                        <span class="palabrax pieza" alt="imagen">
                            imagen
                        </span>
                        <span class="palabrax pieza" alt="epigrafe">
                            Epígrafe
                        </span>
                        <span class="palabrax pieza" alt="cuerpo">
                            cuerpo
                        </span>
                    </div>
                </div>
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
function result_tipo_3_8_18() {
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