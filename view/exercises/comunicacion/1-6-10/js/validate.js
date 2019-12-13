var ño = 0;
var ños = 0;
var ñe = 0;
var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
    }
});

// ta
$("#1").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ño") {
            ño++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// te
$("#2").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ños") {
            ños++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// ti
$("#3").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ñe") {
            ñe++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// to
$("#4").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ñe") {
            ñe++
        }
        ui.draggable.draggable("disable", 1);
    }
});