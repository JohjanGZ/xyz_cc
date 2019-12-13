var r = 0;

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
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});

$("#ann3").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});

$("#ann").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "an2" || element == "an3" || element == "an") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});



$("#enn2").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "en" || element == "en2") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});

$("#enn").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "en" || element == "en2") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});

$("#inn").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "in" || element == "in2") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});

$("#inn2").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "in" || element == "in2") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});


$("#onn").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "on") {
            r++;
        }
        ui.draggable.draggable("disable", 1);
        console.log(r);
    }
});