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
                    <div class="contenedor-palabras-img uno">
                        <span class="palabra-img" alt="elefantes">
                            <img src="<?= $dir ?>/img/1.png" >
                        </span>
                        <span class="palabra-img" alt="jirafas">
                            <img src="<?= $dir ?>/img/2.png" >
                        </span>
                        <span class="palabra-img" alt="hipopótamos">
                            <img src="<?= $dir ?>/img/3.png" >
                        </span>
                        <span class="palabra-img" alt="monos">
                            <img src="<?= $dir ?>/img/4.png" >
                        </span>
                    </div>
                    <div class="oracion uno">
                        <h5>
                        En el zoológico hay
                        </h5>
                    </div>
                </div>
                <div class="ejercicio">
                    <div class="contenedor-palabras-img dos">
                        <span class="palabra-img" alt="atún">
                            <img src="<?= $dir ?>/img/5.png" >
                        </span>
                        <span class="palabra-img" alt="lechuga">
                            <img src="<?= $dir ?>/img/6.png" >
                        </span>
                        <span class="palabra-img" alt="jamón">
                            <img src="<?= $dir ?>/img/7.png" >
                        </span>
                        <span class="palabra-img" alt="cebolla">
                            <img src="<?= $dir ?>/img/8.png" >
                        </span>
                    </div>
                    <div class="oracion dos">
                        <h5>
                        Hoy para cenar hay ensalada de
                        </h5>
                    </div>
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

var r = 0;
var v = 1;






function result_tipo_3_4_11() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 8) {
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