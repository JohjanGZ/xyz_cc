<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?php 
    $numeros = array('<','>');
?>
<?=$titulo?>
<div class="container-two">
    <div class="containerPrincipal">
        <div class="fila aleatorio">
            <div class="item" data-value="245">245</div>
            <div class="item" data-value="465">465</div>
            <div class="item" data-value="297">297</div>
            <div class="item" data-value="424">424</div>
            <div class="item" data-value="102">102</div>
            <div class="item" data-value="320">320</div>
        </div>
        <div class="filados">
            <div class="droppable" data-value="102"></div>
            <div class="red"><h5> < </h5></div>
            <div class="droppable" data-value="245"></div>
            <div class="red"><h5> < </h5></div>
            <div class="droppable" data-value="297"></div>
            <div class="red"><h5> < </h5></div>
            <div class="droppable" data-value="320"></div>
            <div class="red"><h5> < </h5></div>
            <div class="droppable" data-value="424"></div>
            <div class="red"><h5> < </h5></div>
            <div class="droppable" data-value="320"></div>
        </div>
    </div>
    <div class="containerPrincipal">
        <div class="fila opcionesDos aleatorio">
            <div class="item" data-value="264">264</div>
            <div class="item" data-value="448">448</div>
            <div class="item" data-value="358">358</div>
            <div class="item" data-value="244">244</div>
            <div class="item" data-value="500">500</div>
            <div class="item" data-value="109">109</div>
        </div>
        <div class="filados segundaFila">
            <div class="droppable" data-value="500"></div>
            <div class="red"><h5> > </h5></div>
            <div class="droppable" data-value="448"></div>
            <div class="red"><h5> > </h5></div>
            <div class="droppable" data-value="358"></div>
            <div class="red"><h5> > </h5></div>
            <div class="droppable" data-value="264"></div>
            <div class="red"><h5> > </h5></div>
            <div class="droppable" data-value="244"></div>
            <div class="red"><h5> > </h5></div>
            <div class="droppable" data-value="109"></div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/4/respuesta.png">
        </center>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Listo!</a>
    </div>
</div>
</body>
<script src="../../../../../js/core.js"></script>
<?php require('../../../tools/botones/botones.php');?>
<script>$("#next").attr("onclick", "<?=$next?>");</script>
<script type="text/javascript">

var rpta = 0, otros = 0, element, element2;

$(".item").draggable({
    revert: false,
    start: function() {
        element = $(this).attr("data-value"); 
    },
});
$( ".droppable" ).droppable({
  classes: {
    "ui-droppable-active": "",
    "ui-droppable-hover": "ui-state-hover"
  },
  drop: function( event, ui ) {
    $(".obj").css("border", "none");
    $( this ).target.append(event.target);
    element2 = $(this).attr("data-value");
    if(element==element2){
      rpta++;
    }else{
      otros++;
    }
  }
});

// Formulario - Registrados

function result_tipo_2_3_20() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 12) {
        console.log(rpta);
        localStorage.setItem("Nota2-3-20", "2");
        localStorage.setItem("Time2-3-20", tiempo);
        correcto();

    }

    else {
        console.log(rpta);
        incorrecto();
        localStorage.setItem("Nota2-3-20", "0");
        localStorage.setItem("Time2-3-20", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e)=>{

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>