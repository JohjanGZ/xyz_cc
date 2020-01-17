<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<style type="text/css">

</style>
<?=$titulo?>
<?php
    $numeros = array('12','18','24','28','32', '36','46','54', '60');
?>

<body>
    <div class="caja-principal">
        <div class="content">
            <div class="image">
                <div class="box contenedor boxUno" alt="30"></div>
                <div class="box contenedor boxDos" alt="33"></div>
                <div class="box contenedor boxTres" alt="36"></div>
                <div class="box contenedor boxCuatro" alt="3"></div>
                <div class="box contenedor boxCinco" alt="6"></div>
                <div class="box contenedor boxSeis" alt="9"></div>
                <div class="box contenedor boxSiete" alt="12"></div>
                <div class="box contenedor boxOcho" alt="15"></div>
                <div class="box contenedor boxNueve" alt="18"></div>
                <div class="box contenedor boxDiez" alt="21"></div>
                <div class="box contenedor boxOnce" alt="24"></div>
                <div class="box contenedor boxDoce" alt="27"></div>
                <div class="box contenedor boxTrece" alt="40"></div>
                <div class="box contenedor boxCatorce" alt="44"></div>
                <div class="box contenedor boxQuince" alt="48"></div>
                <div class="box contenedor boxDieciseis" alt="4"></div>
                <div class="box contenedor boxDiecisiete" alt="8"></div>
                <div class="box contenedor boxDieciocho" alt="12"></div>
                <div class="box contenedor boxDiecinueve" alt="16"></div>
                <div class="box contenedor boxVeinte" alt="20"></div>
                <div class="box contenedor boxVeintiuno" alt="24"></div>
                <div class="box contenedor boxVeintidos" alt="28"></div>
                <div class="box contenedor boxVeintitres" alt="32"></div>
                <div class="box contenedor boxVeinticuatro" alt="36"></div>
            </div>
            <div class="respuestas">
                <p class="pieza" alt="3">3</p>
                <p class="pieza" alt="9">9</p>
                <p class="pieza" alt="15">15</p>
                <p class="pieza" alt="21">21</p>
                <p class="pieza" alt="27">27</p>
                <p class="pieza" alt="33">33</p>
                <p class="pieza" alt="4">4</p>
                <p class="pieza" alt="12">12</p>
                <p class="pieza" alt="20">20</p>
                <p class="pieza" alt="28">28</p>
                <p class="pieza" alt="36">36</p>
                <p class="pieza" alt="44">44</p>
                <p class="pieza" alt="6">6</p>
                <p class="pieza" alt="12">12</p>
                <p class="pieza" alt="18">18</p>
                <p class="pieza" alt="24">24</p>
                <p class="pieza" alt="30">30</p>
                <p class="pieza" alt="36">36</p>
                <p class="pieza" alt="8">8</p>
                <p class="pieza" alt="16">16</p>
                <p class="pieza" alt="24">24</p>
                <p class="pieza" alt="32">32</p>
                <p class="pieza" alt="40">40</p>
                <p class="pieza" alt="48">48</p>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4 class="center">Respuesta correcta</h4>
            <center>
                <img class="materialboxed" width="100%" src="<?= $dir ?>/img/respuesta.png">
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

<script type="text/javascript">
// Validar
r = 0;
arrastre();

function result_tipo_2_3_12() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 24) {
        console.log(r)
        localStorage.setItem("Nota<?=$cod?>", nota);
        localStorage.setItem("Time<?=$cod?>", tiempo);
        correcto();
    } else {
        console.log(r)
        incorrecto();
        localStorage.setItem("Nota<?=$cod?>", "0");
        localStorage.setItem("Time<?=$cod?>", tiempo);
    }

}
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>