<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>

    <div class="contenedor-two">
        <div class="contenedor-oraciones">
            <div class="oracion">
                <div class="pregunta">
                    <div class="d-flex"><span>•</span> La mesa redonda es una forma de <div class="contenedor" alt="debate"></div> oral y <div class="contenedor" alt="estructurado"></div>.</div>
                    <div class="d-flex"><span>•</span> Los ponentes se reúnen para <div class="contenedor" alt="conversar"></div> y <div class="contenedor" alt="argumentar"></div> sobre un </div> <div class="d-flex">determinado tema.</div>
                </div>
                <div class="contenedor-check">
                    <div class="pieza" alt="">diálogo</div>
                    <div class="pieza" alt="">forma</div>
                    <div class="pieza" alt="">técnica</div>
                    <div class="pieza" alt="debate">debate</div>
                    <div class="pieza" alt="">evaluación</div>
                    <div class="pieza" alt="estructurado">estructurado</div>
                    <div class="pieza" alt="">investigar</div>
                    <div class="pieza" alt="conversar">conversar</div>
                    <div class="pieza" alt="">preguntar</div>
                    <div class="pieza" alt="argumentar">argumentar</div>
                    <div class="pieza" alt="">evaluar</div>
                    <div class="pieza" alt="">organizar</div>
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

function result_tipo_5_3_8() {
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