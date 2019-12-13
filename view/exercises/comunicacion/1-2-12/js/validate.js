var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");

    }
});

// ta
$("#ta").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "taa" || element == "taa2") {
            r++
        }

        ui.draggable.draggable("disable", 1);
    }
});

// te
$("#ta2").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "taa" || element == "taa2") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

// ti
$("#te").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tee" || element == "tee2") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

// to
$("#te2").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tee" || element == "tee2") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

// to2
$("#ti").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "tii" || element == "tii2") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

// to2
$("#ti2").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "tii" || element == "tii2") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

// tu
$("#pa").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "paa") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#le").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "lee") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#vi").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "vii") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#sor").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "sorr") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#zas").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "zass") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#ne").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "nee") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#dor").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "dorr") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#na").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "naa") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});

$("#za").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "zaa") {
            r++
        }


        ui.draggable.draggable("disable", 1);
    }
});