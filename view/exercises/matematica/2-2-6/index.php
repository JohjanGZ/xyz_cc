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
            <div class="letras droppable" id="dos" alt="l587" value="l875" data-value="l785">

            </div>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="cinco" alt="587" value="875" data-value="785">

            </div>
            <div class="caja">
                <p>=</p>
            </div>
            <div class="letras droppable" id="seis" alt="l587" value="l875" data-value="l785">

            </div>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="nueve" alt="587" value=l875" data-value="785">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" id="diez" alt="l587" value="l875" data-value="l785">

            </div>
        </div>
    </div>
    <div class="boxCheck">
        <div class="caja">
            <h5 class="purple">946</h5>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="tres" alt="946" value="496" data-value="649">

            </div>
            <div class="caja">
                <p>=</p>
            </div>
            <div class="letras droppable" id="cuatro" alt="l946" value="l496" data-value="l649">

            </div>
        </div>


        <div class="droppables">
            <div class="numero droppable" id="siete" alt="946" value="496" data-value="649">

            </div>
            <div class="caja">
                <p>=</p>
            </div>
            <div class="letras droppable" id="ocho" alt="l946" value="l496" data-value="l649">

            </div>
        </div>
        <div class="droppables">
            <div class="numero droppable" id="once" alt="946" value="496" data-value="649">

            </div>
            <div class="caja">
            <p>=</p>
            </div>
            <div class="letras droppable" id="doce" alt="l946" value="l496" data-value="l649">

            </div>
        </div> 
    </div>
    <div class="row boxCheck separa aleatorios" id="boxCheck">
        <div class="cajaOpciones aleatorio">
            <div class="p obj" data-value="l587">quinientos ochenta y siete</div>
            <div class="p obj" data-value="l875">ochocientos setenta y cinco</div>
            <div class="p obj" data-value="l785">setecientos ochenta y cinco</div>
            <div class="p obj" data-value="l946">novecientos cuarenta y seis</div>
            <div class="p obj" data-value="l496">cuatrocientos noventa y seis</div>
            <div class="p obj" data-value="l649">seiscientos cuarenta y nueve</div>
        </div>
        <div class="cajaOpciones2 aleatorio">
            <div class="p obj" data-value="587">587</div>
            <div class="p obj" data-value="875">875</div>
            <div class="p obj" data-value="785">785</div>
            <div class="p obj" data-value="946">946</div>
            <div class="p obj" data-value="496">496</div>
            <div class="p obj" data-value="649">649</div>
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
        console.log(id);
        if (id == "uno" || id=="dos") {
            if (alt == element) {
                console.log(element)
                rpta++;
                $("#dos").attr("alt", "l587");
                $("#dos").attr("value", "l587");
                $("#dos").attr("data-value", "l587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#dos").attr("alt", "l875");
                $("#dos").attr("value", "l875");
                $("#dos").attr("data-value", "l875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#dos").attr("alt", "l785");
                $("#dos").attr("value", "l785");
                $("#dos").attr("data-value", "l785");
            }else if (alt == element) {
                console.log(element)
                rpta++;
                $("#uno").attr("alt", "587");
                $("#uno").attr("value", "587");
                $("#uno").attr("data-value", "587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#uno").attr("alt", "875");
                $("#uno").attr("value", "875");
                $("#uno").attr("data-value", "875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#uno").attr("alt", "785");
                $("#uno").attr("value", "785");
                $("#uno").attr("data-value", "785");
            }
        }else if(id=="tres" || id =="cuatro"){
            if (alt == element) {
                rpta++;
                $("#cuatro").attr("alt", "l946");
                $("#cuatro").attr("value", "l946");
                $("#cuatro").attr("data-value", "l946");
            } else if (val == element) {
                rpta++;
                $("#cuatro").attr("alt", "l496");
                $("#cuatro").attr("value", "l496");
                $("#cuatro").attr("data-value", "l496");
            } else if (dval == element) {
                rpta++;
                $("#cuatro").attr("alt", "l649");
                $("#cuatro").attr("value", "l649");
                $("#cuatro").attr("data-value", "l649");
            }else if (alt== element) {
                rpta++;
                $("#tres").attr("alt", "946");
                $("#tres").attr("value", "946");
                $("#tres").attr("data-value", "946");
            } else if (val== element) {
                rpta++;
                $("#tres").attr("alt", "496");
                $("#tres").attr("value", "496");
                $("#tres").attr("data-value", "496");
            } else if (dval== element) {
                rpta++;
                $("#tres").attr("alt", "649");
                $("#tres").attr("value", "649");
                $("#tres").attr("data-value", "649");
            }
        }else if(id=="cinco" || id =="seis"){
            if (alt == element) {
                console.log(element)
                rpta++;
                $("#seis").attr("alt", "l587");
                $("#seis").attr("value", "l587");
                $("#seis").attr("data-value", "l587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#seis").attr("alt", "l875");
                $("#seis").attr("value", "l875");
                $("#seis").attr("data-value", "l875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#seis").attr("alt", "l785");
                $("#seis").attr("value", "l785");
                $("#seis").attr("data-value", "l785");
            }else if (alt == element) {
                console.log(element)
                rpta++;
                $("#cinco").attr("alt", "587");
                $("#cinco").attr("value", "587");
                $("#cinco").attr("data-value", "587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#cinco").attr("alt", "875");
                $("#cinco").attr("value", "875");
                $("#cinco").attr("data-value", "875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#cinco").attr("alt", "785");
                $("#cinco").attr("value", "785");
                $("#cinco").attr("data-value", "785");
            }
        }else if(id=="siete" || id =="ocho"){
            if (alt == element) {
                rpta++;
                $("#ocho").attr("alt", "l946");
                $("#ocho").attr("value", "l946");
                $("#ocho").attr("data-value", "l946");
            } else if (val == element) {
                rpta++;
                $("#ocho").attr("alt", "l496");
                $("#ocho").attr("value", "l496");
                $("#ocho").attr("data-value", "l496");
            } else if (dval == element) {
                rpta++;
                $("#ocho").attr("alt", "l649");
                $("#ocho").attr("value", "l649");
                $("#ocho").attr("data-value", "l649");
            }else if (alt== element) {
                rpta++;
                $("#siete").attr("alt", "946");
                $("#siete").attr("value", "946");
                $("#siete").attr("data-value", "946");
            } else if (val== element) {
                rpta++;
                $("#siete").attr("alt", "496");
                $("#siete").attr("value", "496");
                $("#siete").attr("data-value", "496");
            } else if (dval== element) {
                rpta++;
                $("#siete").attr("alt", "649");
                $("#siete").attr("value", "649");
                $("#siete").attr("data-value", "649");
            }
        }else if(id=="nueve" || id =="diez"){
            if (alt == element) {
                console.log(element)
                rpta++;
                $("#diez").attr("alt", "l587");
                $("#diez").attr("value", "l587");
                $("#diez").attr("data-value", "l587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#diez").attr("alt", "l875");
                $("#diez").attr("value", "l875");
                $("#diez").attr("data-value", "l875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#diez").attr("alt", "l785");
                $("#diez").attr("value", "l785");
                $("#diez").attr("data-value", "l785");
            }else if (alt == element) {
                console.log(element)
                rpta++;
                $("#nueve").attr("alt", "587");
                $("#nueve").attr("value", "587");
                $("#nueve").attr("data-value", "587");
            } else if (val == element) {
                console.log(element)
                rpta++;
                $("#nueve").attr("alt", "875");
                $("#nueve").attr("value", "875");
                $("#nueve").attr("data-value", "875");
            } else if (dval == element) {
                console.log(element)
                rpta++;
                $("#nueve").attr("alt", "785");
                $("#nueve").attr("value", "785");
                $("#nueve").attr("data-value", "785");
            }
        }else if(id=="once" || id =="doce"){
            if (alt == element) {
                rpta++;
                $("#doce").attr("alt", "l946");
                $("#doce").attr("value", "l946");
                $("#doce").attr("data-value", "l946");
            } else if (val == element) {
                rpta++;
                $("#doce").attr("alt", "l496");
                $("#doce").attr("value", "l496");
                $("#doce").attr("data-value", "l496");
            } else if (dval == element) {
                rpta++;
                $("#doce").attr("alt", "l649");
                $("#doce").attr("value", "l649");
                $("#doce").attr("data-value", "l649");
            }else if (alt== element) {
                rpta++;
                $("#once").attr("alt", "946");
                $("#once").attr("value", "946");
                $("#once").attr("data-value", "946");
            } else if (val== element) {
                rpta++;
                $("#once").attr("alt", "496");
                $("#once").attr("value", "496");
                $("#once").attr("data-value", "496");
            } else if (dval== element) {
                rpta++;
                $("#once").attr("alt", "649");
                $("#once").attr("value", "649");
                $("#once").attr("data-value", "649");
            }
        }
        

        elementId.css({
            "color": "#fff",
            "background": "transparent",
        });
        element.removeClass("sd")
        console.log(rpta, otros);
    }
});
console.log(rpta, otros);
// Formulario - Registrados

function result_tipo_2_2_6() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    if (rpta == 12 && otros == 0) {
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