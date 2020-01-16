var r = 0;
var la = 0;
var la2 = 0;
var le = 0;
var lo = 0;
var lo2 = 0;

var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");
    }
});

// la
$("#la").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "laa" || element == "laa2") {
            la++
            console.log(element);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// la2
$("#la2").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "laa" || element == "laa2") {
            la2++
            console.log(la2);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// le
$("#le").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "lee") {
            le++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// lo
$("#lo").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "loo" || element == "loo2") {
            lo++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// lo2
$("#lo2").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "loo" || element == "loo2") {
            lo2++
        }
        ui.draggable.draggable("disable", 1);
    }
});