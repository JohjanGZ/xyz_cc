<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('2','3','4','5','6','7','8','9','10','11','12');
?>
<?=$titulo?>
<div class="container-two">
        <div class="content">
            <div class="fila">
                <div class="">
                    <img src="<?= $dir ?>/img/1.png" alt="">
                </div>
                <div class="numero">0</div>
                <div class="numero">1</div>
                <div class="numero">2</div>
                <div class="numero">3</div>
                <div class="numero">4</div>
                <div class="numero">5</div>
                <div class="numero">6</div>
                <div class="numero">7</div>
                <div class="numero">8</div>
                <div class="numero">9</div>
                <div class="numero">10</div>
                <div class="numero">11</div>
                <div class="numero">12</div>
            </div>
            <div class="fila rpta">
                <div class="numero amarillo">3</div>
                <div class="contenedor" alt="0"></div>
                <div class="contenedor" alt="3"></div>
                <div class="contenedor" alt="6"></div>
                <div class="contenedor" alt="9"></div>
                <div class="contenedor" alt="12"></div>
                <div class="contenedor" alt="15"></div>
                <div class="contenedor" alt="18"></div>
                <div class="contenedor" alt="21"></div>
                <div class="contenedor" alt="24"></div>
                <div class="contenedor" alt="27"></div>
                <div class="contenedor" alt="30"></div>
                <div class="contenedor" alt="33"></div>
                <div class="contenedor" alt="36"></div>
            </div>
            <div class="respuestas aleatorio">
                <p class="pieza" alt="0">0</p>
                <p class="pieza" alt="3">3</p>
                <p class="pieza" alt="6">6</p>
                <p class="pieza" alt="9">9</p>
                <p class="pieza" alt="12">12</p>
                <p class="pieza" alt="15">15</p>
                <p class="pieza" alt="18">18</p>
                <p class="pieza" alt="21">21</p>
                <p class="pieza" alt="24">24</p>
                <p class="pieza" alt="27">27</p>
                <p class="pieza" alt="30">30</p>
                <p class="pieza" alt="33">33</p>
                <p class="pieza" alt="36">36</p>
            </div>
        </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
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
<script>
$("#next").attr("onclick", "<?=$next?>");
</script>
<script type="text/javascript" src="<?= $dir ?>/js/validate.js"></script>
<script type="text/javascript">
// Formulario - Registrados


function result_tipo_2_4_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 13) {
        
        localStorage.setItem("Nota2-4-9", "2");
        localStorage.setItem("Time2-4-9", tiempo);
        correcto();

    } else {
        
        incorrecto();
        localStorage.setItem("Nota2-4-9", "0");
        localStorage.setItem("Time2-4-9", tiempo);

    }
}
</script>