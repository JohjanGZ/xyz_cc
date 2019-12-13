var n4 = 0;
var n5 = 0;
var n6 = 0;
var n7 = 0;
var n8 = 0;
var n9 = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
    }
});

$("#4").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "4") {
            n4++
        }
        ui.draggable.draggable("disable", 1);
    }
});
// dE
$("#5").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "5") {
            n5++
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#6").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "6") {
            n6++
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#7").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14) !important");
        //  $( this ).target.append(event.target);
        if (element == "7") {
            n7++
        }
        ui.draggable.draggable("disable", 1);
    }
});
// dE
$("#8").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14) !important");
        //  $( this ).target.append(event.target);

        if (element == "8") {
            n8++
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#9").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14) !important");
        //  $( this ).target.append(event.target);

        if (element == "9") {
            n9++
        }
        ui.draggable.draggable("disable", 1);
    }
});

