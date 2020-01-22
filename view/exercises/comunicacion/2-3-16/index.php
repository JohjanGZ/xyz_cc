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
            <div class="contenedor-imagen">
                <img src="<?= $dir ?>/img/1.png" alt="">
            </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <span>Árboles</span>
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="arbol">

                        </div>
                        <div class="palabra" alt="arbol">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                    <span>Edificios</span>

                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="edificio">

                        </div>
                        <div class="palabra" alt="edificio">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                    <span>Mar</span>
                        
                    </div>
                    <div class="contenedor-respuesta">
                        <div class="palabra" alt="mar">

                        </div>
                        <div class="palabra" alt="mar">

                        </div>
                    </div>
                </div>
               
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="arbol">frondoso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="arbol">verde</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="edificio">alto</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="edificio">rectangular</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mar">extenso</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="mar">limpio</h4>
                </li>
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
function result_tipo_2_3_16() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 6) {
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