<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="image">
        <img src="<?= $dir ?>/img/1.png" class="materialboxed" alt="">
    </div>
    <div class="contenedor">
        <div class="droppable" alt="6543"></div>
        <div class="droppable" alt="6834"> </div>
        <div class="droppable" alt="6224"> </div>
    </div>
    <p class="parra"> • Ahora, ordena los números de forma descendente.</p>
    <div class=" ordenar">
        <div class="droppable" alt="6224"></div>
        <div class="rojo"> < </div> 
        <div class="droppable" alt="6543"></div>
        <div class="rojo"> < </div>
        <div class="droppable" alt="6834"></div>
    </div>
    <div class="options aleatorio">
        <div class="obj" alt="6224">6224</div>
        <div class="obj" alt="6224">6224</div>
        <div class="obj" alt="6543">6543</div>
        <div class="obj" alt="6543">6543</div>
        <div class="obj" alt="6834">6834</div>
        <div class="obj" alt="6834">6834</div>
        <div class="obj" alt="8976">8976</div>
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


var rpta = 0,
    otros = 0,
    element, element2;

$(".obj").draggable({
    revert: false,
    start: function() {
        element = $(this).attr("alt");
    }
});
$(".droppable").droppable({
    classes: {
        "ui-droppable-active": "",
        "ui-droppable-hover": "dropable-hover"
    },
    drop: function(event, ui) {
        element2 = $(this).attr("alt");
        $(this).css("background-color", "rgb(255, 196, 0)");
        //  $( this ).target.append(event.target);    


        if (element == element2) {
            rpta++;
            console.log(element, element2)
        } else {
            otros++;
            console.log(element, element2)
        }
        ui.draggable.draggable("disable", 1);
    }
});

function result_tipo_2_7_26() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 6) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-12", "2");
        localStorage.setItem("Time2-3-12", tiempo);
        correcto();

    } else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-12", "0");
        localStorage.setItem("Time2-3-12", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>