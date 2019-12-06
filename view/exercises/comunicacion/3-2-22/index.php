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
                        <span class="celeste">●</span> Hace muchos años, nació <span class="palabra" alt="arturo">x</span>, el hijo del rey Uther.
                        </p>
                        <p>
                        <span class="celeste">●</span> El padre de Arturo pidió al mago llamado <span class="palabra" alt="merlin">x</span> que cuide a su hijo.
                        </p>
                        <p>
                        <span class="celeste">●</span> Merlín llevó a Arturo al<span class="palabra" alt="castillo">x</span> de un noble para mantenerlo a salvo.
                        </p>
                        <p>
                        <span class="celeste">●</span> El rey <span class="palabra" alt="uther">x</span> había tenido el sueño de unificar Inglaterra.
                        </p>
                    </div>
                </div>
                
            </div>
            <ul class="contenedor-silabas">
                <li class="silabas">
                    <h4 class="pieza" alt="arturo">Arturo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="merlin">Merlín</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="castillo">castillo</h4>
                </li>
                <li class="silabas">
                    <h4 class="pieza" alt="uther">Uther</h4>
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
function result_tipo_3_2_22() {
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