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

                        <span class="span-after">El barco</span>
                        <div class="palabra" alt="azul">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">La licuadora</span>
                        <div class="palabra" alt="nueva">

                        </div>

                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span>El caballo</span>
                        <div class="palabra" alt="negro">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">Los castillos</span>
                        <div class="palabra" alt="grandes">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">Mariposas</span>
                        <div class="palabra" alt="coloridas">

                        </div>
                    </div>
                </div>
                <div class="ejercicio">

                    <div class="contenedor-respuesta">
                        <span class="span-after">Unos caracoles</span>
                        <div class="palabra" alt="lentos">

                        </div>

                    </div>
                </div>
               
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="azul">azul</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="nueva">nueva</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="negro">negro</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="grandes">grandes</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="coloridas">coloridas</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="lentos">lentos</h4>
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
function result_tipo_2_4_4() {
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