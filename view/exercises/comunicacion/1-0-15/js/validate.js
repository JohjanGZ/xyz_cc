var nA = 0;
var nE = 0;
var nI = 0;
var nO = 0;
var nU = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");
    }
});
// uA
$("#uA").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "vA") {
            nA++
        }
        element.removeClass("pieza");
    }
});

// dE
$("#dE").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vE") {
            nE++
        }
        element.removeClass("pieza");
    }
});

//tI
$("#tI").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vI") {
            nI++
        }
        element.removeClass("pieza");
    }
});

//cO
$("#cO").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vO") {
            nO++
        }
        element.removeClass("pieza");
    }
});

//cU
$("#cU").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vU") {
            nU++
        }
        element.removeClass("pieza");
    }
});

function result_tipo_1_0_15() {
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;



    if (nA == 3 && nE == 2 && nI == 1 && nO == 3 && nU == 1) {
        localStorage.setItem("Nota2-1-12", nota);
        localStorage.setItem("Time2-1-12", tiempo);
        correcto();
    } else {
        incorrecto();
        localStorage.setItem("Nota2-1-12", "0");
        localStorage.setItem("Time2-1-12", tiempo);
    }

}