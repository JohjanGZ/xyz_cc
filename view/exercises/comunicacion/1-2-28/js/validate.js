var r = 0;
console.log(r);

var ul = document.querySelector('.contenedor-elementos');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");
        console.log(element);

    }
});
// uA
$("#ann2").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an4") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#ann3").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an4") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#ann4").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an4") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#enn3").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "en" || element == "en2" || element == "en3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#enn2").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "en" || element == "en2" || element == "en3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#enn").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "en" || element == "en2" || element == "en3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});

$("#inn").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "in") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});


$("#onn").droppable({
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
        console.log(r);
    }
});