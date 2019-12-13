var r = 0;

var ol = document.querySelector('.contenedor-oraciones');
for (var i = ol.children.length; i >= 0; i--) {
    ol.appendChild(ol.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");
        console.log(element);

    }
});
// uA
$("#familiaa").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "familia") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});
$("#elefantee").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "elefante") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});
$("#finn").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "fin") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});
$("#fabulosoo").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "fabuloso") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});