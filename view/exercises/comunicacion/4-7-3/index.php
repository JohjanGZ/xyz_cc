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
                            <span class="celeste">●</span>
                            Venderé
                            la leche y con el dinero que me den compraré
                            <span class="palabra contenedor" alt="huevos">x</span>.
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Y de los huevos naceran 
                            <span class="palabra contenedor" alt="pollitos">x</span>
                            que se convertiran en hermosas gallinas
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Luego venderé las gallinas y compraré un
                            <span class="palabra contenedor" alt="cerdo">x</span>
                            .
                        </p>
                        <p>
                            <span class="celeste">●</span>
                            Y cuando esté bien gordo, lo venderé y compraré una
                            <span class="palabra contenedor" alt="vaca">x</span>
                            .
                        </p>
                    </div>
                </div>

            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="cerdo">cerdo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="pollitos">pollitos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="huevos">huevos</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="vaca">vaca</h4>
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
function result_tipo_4_7_3() {
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