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

                <div class="secuencia">
                    <span class="palabra">
                        caminar
                    </span>
                    <span class="palabra">
                        marchar
                    </span>
                    <span class="palabra" alt="n">
                        traer
                    </span>
                    <span class="palabra">
                        partir
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra">
                        alba
                    </span>
                    <span class="palabra" alt="n">
                        noche
                    </span>
                    <span class="palabra">
                        amanecer
                    </span>
                    <span class="palabra">
                        mañana
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra" alt="n">
                        callar
                    </span>
                    <span class="palabra">
                        hablar
                    </span>
                    <span class="palabra">
                        decir
                    </span>
                    <span class="palabra">
                        charlar
                    </span>
                </div>
                <div class="secuencia">
                    <span class="palabra">
                        calle
                    </span>
                    <span class="palabra">
                        avenida
                    </span>
                    <span class="palabra" alt="n">
                        playa
                    </span>
                    <span class="palabra">
                        vía
                    </span>
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
<?php require('../../../tools/botones/botones.php');?> <script>$("#next").attr("onclick","<?=$next?>");</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_7() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 4) {
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