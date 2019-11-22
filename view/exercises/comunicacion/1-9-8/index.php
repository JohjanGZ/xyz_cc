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
            <center>
                <h4 style="padding-top: 20px;">¿Qué animal da los huevos?</h4>
            </center>
            <div class="contenedor-oraciones">
                <div class="oracion">
                    <span>Pato</span>
                </div>
                <div class="oracion" alt="n">
                    <span>Gallina</span>
                </div>
                <div class="oracion">
                    <span>avestruz</span>
                </div>
            </div>
            <center>
                <h4 style="padding-top: 20px;"> ¿De dónde se saca el jamón?</h4>
            </center>
            <div class="contenedor-oraciones2">
                <div class="oracion">
                    <span>Toro</span>
                </div>
                <div class="oracion">
                    <span>Vaca</span>
                </div>
                <div class="oracion" alt="n">
                    <span>Cerdo</span>
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
function result_tipo_1_9_8(){
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 2) {
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}


// clg     console.log(object);
</script>