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
                    <span class="palabra">
                        a
                    </span>
                    <span class="palabra">
                        zu
                    </span>
                    <span class="palabra" alt="n">
                        ce
                    </span>
                    <span class="palabra">
                        na
                    </span>
                </div>
                <div class="ejercicio">
                    <span class="palabra">
                        pal
                    </span>
                    <span class="palabra">
                        me
                    </span>
                    <span class="palabra" alt="n">
                        ral
                    </span>
                </div>
                <div class="ejercicio">
                    <span class="palabra">
                        a
                    </span>
                    <span class="palabra" alt="n">
                        bril
                    </span>
                </div>
                <div class="ejercicio">
                    <span class="palabra">
                        so
                    </span>
                    <span class="palabra">
                        le 
                    </span>
                    <span class="palabra" alt="n">
                        dad 
                    </span>
                </div>
                <div class="ejercicio">
                    <span class="palabra">
                        ma 
                    </span>
                    <span class="palabra" alt="n">
                        ri 
                    </span>
                    <span class="palabra">
                        no
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_2_10() {
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