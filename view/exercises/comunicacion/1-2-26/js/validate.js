var r = 0;

var ul = document.querySelector('.contenedor-elementos');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        console.log(element);

    }
});
// uA
$("#1").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "on") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#2").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#3").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na") {
            r++;
        }
        element.removeClass("pieza");
    }
});



$("#4").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#5").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#6").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#7").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "ni") {
            r++;
        }
        element.removeClass("pieza");
    }
});


$("#8").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na") {
            r++;
        }
        element.removeClass("pieza");
    }
});

$("#9").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no") {
            r++;
        }
        element.removeClass("pieza");
    }
});