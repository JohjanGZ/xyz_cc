<?php require('../../../tools/var/variables.php'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="<?= $dir ?>/css/styles.css">
</head>
<?=$titulo?>
<div class="container-two">
    <div class="boxCheck">
        <div class="caja">
            <h5 class="blue">587</h5>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="uno" alt="587" value="875" data-value="785">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" id="dos" data-value="oooo">

            </div>
        </div>
        <!-- <div class="droppables">
            <div class="numero droppable"  data-value="oooo">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" data-value="oooo">

            </div>
        </div>
        <div class="droppables">
            <div class="numero droppable"  data-value="oooo">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" data-value="oooo">

            </div>
        </div> -->
    </div>
    <div class="boxCheck">
        <div class="caja">
            <h5 class="purple">946</h5>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="tres"  data-value="oooo">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" id="cuatro" data-value="oooo">

            </div>
        </div>
        <!-- <div class="droppables">
            <div class="numero droppable"  data-value="oooo">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" data-value="oooo">

            </div>
        </div>
        <div class="droppables">
            <div class="numero droppable"  data-value="oooo">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" data-value="oooo">

            </div>
        </div> -->
    </div>
    <div class="row boxCheck aleatorio" id="boxCheck">
        <div class="cajaOpciones aleatorio">
            <div class="p obj" data-value="l587">quinientos ochenta y siete</div>
            <div class="p obj" data-value="ooo">ochocientos setenta y cinco</div>
            <div class="p obj" data-value="ooo">setecientos ochenta y cinco</div>
            <div class="p obj" data-value="ooo">novecientos cuarenta y seis</div>
            <div class="p obj" data-value="ooo">cuatrocientos noventa y seis</div>
            <div class="p obj" data-value="ooo">seiscientos cuarenta y nueve</div>
        </div>
        <div class="cajaOpciones2 aleatorio">
            <div class="p obj" data-value="587">587</div>
            <div class="p obj" data-value="875">875</div>
            <div class="p obj" data-value="785">785</div>
            <div class="p obj" data-value="946">946</div>
            <div class="p obj" data-value="496">496</div>
            <div class="p obj" data-value="694">694</div>
        </div>
    </div>
</div>
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4 class="center">Respuesta correcta</h4>
        <center>
            <img class="materialboxed" width="80%" src="img/5/respuesta.png">
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
var rpta = 0,
    otros = 0,
    element;

$(".obj").draggable({
    revert: false,
    start: function() {
        element = $(this).attr("data-value");
        elementId = $(this);
    }
});


$(".droppable").droppable({
    classes: {
        "ui-droppable-active": ".blue",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "cornflowerblue");
        $(elementId).css("border", "none");
        dval = $(this).attr("data-value");
        val = $(this).attr("value");
        alt = $(this).attr("alt");
        id = $(this).attr("id");
        console.log(id)
        if (alt == "587") {
            rpta++;
            $("#dos").attr("alt","l587");
            $("#dos").attr("value","l587");
            $("#dos").attr("data-value","l587");
        } else if(val == "875"){
            $("#dos").attr("alt","l875");
            $("#dos").attr("value","l875");
            $("#dos").attr("data-value","l875");
        }else {
            otros++;
        }

        
        elementId.css({
            "color" : "#fff",
            "background": "transparent",
        });
        element.removeClass("sd")
    }
});
console.log(rpta, otros);
// Formulario - Registrados

function result_tipo_2_2_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 4 && otros == 0) {
        console.log(rpta, otros);
        localStorage.setItem("Nota2-1-6", "2");
        localStorage.setItem("Time2-1-6", tiempo);
        correcto();

    } else {
        console.log(rpta, otros);
        incorrecto();
        localStorage.setItem("Nota2-1-6", "0");
        localStorage.setItem("Time2-1-6", tiempo);

    }
}

var cols = document.querySelectorAll('.aleatorio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});
</script>