<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>

<body>
    <div class="container-two">
        <center>
            <img src="<?= $dir ?>/img/principal.png" class="img">
        </center>
        <div class="grid-container">
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before">El</span>
                    <img src="<?=$dir?>/img/1.png" class="img-p">
                    <span class="span-after">está en el número</span>
                    <div class="caja" alt="4"></div>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before">El</span>
                    <img src="<?=$dir?>/img/2.png" class="img-p">
                    <span class="span-after">está en el número</span>
                    <div class="caja" alt="1"></div>
                </div>
            </div>
            <div class="grid-item">
                <div class="flex-box">
                    <span class="span-before">El</span>
                    <img src="<?=$dir?>/img/3.png" class="img-p">
                    <span class="span-after">está en el número</span>
                    <div class="caja" alt="8"></div>
                </div>
            </div>
        </div>

        <div class="contenedor-silabas">
            <ul class="opciones">
                <li id="1" alt="1" class="pieza">
                    <span>1</span>
                </li>
                <li id="2" alt="2" class="pieza">
                    <span>2</span>
                </li>
                <li id="3" alt="3" class="pieza">
                    <span>3</span>
                </li>
                <li id="4" alt="4" class="pieza">
                    <span>4</span>
                </li>
                <li id="5" alt="5" class="pieza">
                    <span>5</span>
                </li>
                <li id="6" alt="6" class="pieza">
                    <span>6</span>
                </li>
                <li id="7" alt="7" class="pieza">
                    <span>7</span>
                </li>
                <li id="8" alt="8" class="pieza">
                    <span>8</span>
                </li>
                <li id="9" alt="9" class="pieza">
                    <span>9</span>
                </li>
                <li id="10" alt="10" class="pieza">
                    <span>10</span>
                </li>
            </ul>
        </div>
    </div>
    <!-- Respuesta -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <center>
                <h4>Respuesta correcta</h4>
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
function result_tipo_1_1_25() {
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