<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<?php 

    $numeros = array('120','410','400', '254');

?>
<div class="container-two">
    <div class="options">
        <div class="seleccion pieza item" alt="6 501">6 501</div>
        <div class="seleccion pieza item" alt="7 408">7 408</div>
        <div class="seleccion pieza item" alt="3 272">3 272</div>
        <div class="seleccion pieza item" alt="5 096">5 096</div>
        <div class="seleccion pieza item" alt="4 928">4 928</div>
        <div class="seleccion pieza item" alt="8 901">8 901</div>
        <div class="seleccion pieza item" alt="2 709">2 709</div>
        <div class="seleccion pieza item" alt="3 005">3 005</div>
    </div>
    <div class="containersBox">
        <div class="droppable contenedor" alt="8 901"></div>
        <div class="droppable contenedor" alt="7 408"></div>
        <div class="droppable contenedor" alt="6 501"></div>
        <div class="droppable contenedor" alt="5 096"></div>
        <div class="droppable contenedor" alt="4 928"></div>
        <div class="droppable contenedor" alt="3 272"></div>
        <div class="droppable contenedor" alt="3 005"></div>
        <div class="droppable contenedor" alt="2 709"></div>
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
<script type="text/javascript">
$('select').formSelect();
r = 0;
arrastre();

function result_tipo_4_1_9() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;
    
    if (r == 8) {
        console.log(r);
        localStorage.setItem("Nota4-1-8", "2");
        localStorage.setItem("Time4-1-8", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota4-1-8", "0");
        localStorage.setItem("Time4-1-8", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>