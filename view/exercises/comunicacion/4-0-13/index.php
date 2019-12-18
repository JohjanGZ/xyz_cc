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
                        <span class="celeste">●</span> Fuimos a la <span class="palabra contenedor" alt="xpera">x</span> a ver una obra de Verdi.
                        </p>
                        <p>
                        <span class="celeste">●</span> Bisbal <span class="palabra contenedor" alt="cantx">x</span> en un programa de televisión.
                        </p>
                        <p>
                        <span class="celeste">●</span> <span class="palabra contenedor" alt="cambix">x</span> las ruedas del coche porque estaban rotas.
                        </p>
                        <p>
                        <span class="celeste">●</span> Mejor no <span class="palabra contenedor" alt="canto">x</span>, que empieza a llover.
                        </p>
                        <p>
                        <span class="celeste">●</span> El cirujano es el que <span class="palabra contenedor" alt="opera">x</span> hoy.
                        </p>
                        <p>
                        <span class="celeste">●</span> ¿Tienes <span class="palabra contenedor" alt="cambio">x</span> para comprar pan?
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="canto">canto</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cantx">cantó</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="xpera">ópera</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="opera">opera</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cambio">cambio</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="cambix">cambió</h4>
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
function result_tipo_4_0_13() {
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