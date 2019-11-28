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

                    <span class="respuesta" alt="antes">
                        x
                    </span>
                    <span class="palabra">
                        de irme al colegio, reviso mi mochila para segurarme de llevar todo lo necesario.
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="mientras">
                        x
                    </span>
                    <span class="palabra">
                        mi hermano se columpia, mi mamá se sienta en un banco a conversar con las vecinas.
                    </span>
                </div>
                <div class="secuencia">
                    <span class="respuesta" alt="despues">
                        x
                    </span>
                    <span class="palabra">
                        de sacar el queque del horno, debes esperar a que se enfríe para poder comerlo.
                    </span>
                </div>
               

            </div>

            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="antes">Antes</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mientras">Mientras</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="despues">Después</h4>
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
<?php require('../../../tools/botones/botones.php');?>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Validar
function result_tipo_2_6_8() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 3) {
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