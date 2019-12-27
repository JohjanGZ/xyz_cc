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
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/1.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <span style="width: 100%;padding-bottom: 15px;text-align:center;justify-content:center;">
                            La chica está en la mesa.
                        </span>
                        <div class="palabra contenedor" alt="ella">

                        </div>
                        <span>
                            está comiendo.
                        </span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/3.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <span style="width: 100%;padding-bottom: 15px;text-align:center;justify-content:center;">
                            La chica es pintora.
                        </span>
                        <div class="palabra contenedor" alt="ella">

                        </div>
                        <span>
                            pinta de amarillo.
                        </span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/2.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <span style="width: 100%;padding-bottom: 15px;text-align:center;justify-content:center;">
                            La pareja baila marinera.
                        </span>
                        <div class="palabra contenedor" alt="ellos">

                        </div>
                        <span>
                            están bailando.
                        </span>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="imagen-palabra">
                        <img src="<?= $dir ?>/img/4.png">
                    </div>
                    <div class="contenedor-respuesta">
                        <span style="width: 100%;padding-bottom: 15px;text-align:center;justify-content:center;">
                            Mi papá se afeita.
                        </span>
                        <div class="palabra contenedor" alt="el">

                        </div>
                        <span>
                            usa espuma y cuchilla.
                        </span>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">

                <li class="silabas">
                    <h4 class="pieza" alt="ella">Ella</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ellos">Ellos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="ella">Ella</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="el">Él</h4>
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
function result_tipo_4_4_17() {
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