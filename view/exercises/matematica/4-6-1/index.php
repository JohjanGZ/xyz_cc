<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php
    $numeros = array('cangrejos','tiburones','estrellas de mar','caballitos de mar');
?>
<?=$titulo?>
<div class="container-two">
    <div class="contentBox aleatori">
        <div class="fila">
            <div class="cajaFila">2 810</div>
            <div class="cajaFila">2 820</div>
            <div class="cajaFila">2 830</div>
            <div class="cajaFila droppable contenedor" alt="2 840"></div>
            <div class="cajaFila droppable contenedor" alt="2 850"></div>
            <div class="cajaFila droppable contenedor" alt="2 860"></div>
            <div class="cajaFila droppable contenedor" alt="2 870"></div>
            <div class="cajaFila droppable contenedor" alt="2 880"></div>
        </div>
        <div class="fila">
            <div class="cajaFila">8 205</div>
            <div class="cajaFila">8 210</div>
            <div class="cajaFila">8 215</div>
            <div class="cajaFila droppable contenedor" alt="8 220"></div>
            <div class="cajaFila droppable contenedor" alt="8 225"></div>
            <div class="cajaFila droppable contenedor" alt="8 230"></div>
            <div class="cajaFila droppable contenedor" alt="8 235"></div>
            <div class="cajaFila droppable contenedor" alt="8 240"></div>
        </div>
        <div class="fila">
            <div class="cajaFila">9 560</div>
            <div class="cajaFila">9 562</div>
            <div class="cajaFila">9 564</div> 
            <div class="cajaFila droppable contenedor" alt="9 566"></div>
            <div class="cajaFila droppable contenedor" alt="9 568"></div>
            <div class="cajaFila droppable contenedor" alt="9 570"></div>
            <div class="cajaFila droppable contenedor" alt="9 572"></div>
            <div class="cajaFila droppable contenedor" alt="9 574"></div>
        </div>
        <div class="fila">
            <div class="cajaFila">6 415</div>
            <div class="cajaFila">6 418</div>
            <div class="cajaFila">6 421</div>
            <div class="cajaFila droppable contenedor" alt="6 424"></div>
            <div class="cajaFila droppable contenedor" alt="6 427"></div>
            <div class="cajaFila droppable contenedor" alt="6 430"></div>
            <div class="cajaFila droppable contenedor" alt="6 433"></div>
            <div class="cajaFila droppable contenedor" alt="6 436"></div>
        </div>
    </div>
    <div class="optionBox">
        <p class="pieza obj" alt="2 840">2840</p>
        <p class="pieza obj" alt="2 850">2850</p>
        <p class="pieza obj" alt="2 860">2860</p>
        <p class="pieza obj" alt="2 870">2870</p>
        <p class="pieza obj" alt="2 880">2880</p>
        <p class="pieza obj" alt="8 220">8220</p>
        <p class="pieza obj" alt="8 225">8225</p>
        <p class="pieza obj" alt="8 230">8230</p>
        <p class="pieza obj" alt="8 235">8235</p>
        <p class="pieza obj" alt="8 240">8240</p>
        <p class="pieza obj" alt="9 566">9566</p>
        <p class="pieza obj" alt="9 568">9568</p>
        <p class="pieza obj" alt="9 570">9570</p>
        <p class="pieza obj" alt="9 572">9572</p>
        <p class="pieza obj" alt="9 574">9574</p>
        <p class="pieza obj" alt="6 424">6424</p>
        <p class="pieza obj" alt="6 427">6427</p>
        <p class="pieza obj" alt="6 430">6430</p>
        <p class="pieza obj" alt="6 433">6433</p>
        <p class="pieza obj" alt="6 436">6436</p>
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
r = 0;
arrastre();
function result_tipo_4_6_1() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (r == 5) {
        console.log(r);
        localStorage.setItem("Nota2-3-24", "2");
        localStorage.setItem("Time2-3-24", tiempo);
        correcto();

    } else {
        console.log(r);
        incorrecto();
        localStorage.setItem("Nota2-3-24", "0");
        localStorage.setItem("Time2-3-24", tiempo);

    }
}
</script>