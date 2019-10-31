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

        element.removeClass("pieza");
    }
});

// te
$("#ta2").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "taa" || element == "taa2") {
            r++
        }


        element.removeClass("pieza");
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


        element.removeClass("pieza");
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


        element.removeClass("pieza");
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


        element.removeClass("pieza");
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


        element.removeClass("pieza");
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


        element.removeClass("pieza");
    }
});

$("#le").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "lee") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#vi").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "vii") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#sor").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "sorr") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#zas").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "zass") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#ne").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "nee") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#dor").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "dorr") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#na").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "naa") {
            r++
        }


        element.removeClass("pieza");
    }
});

$("#za").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "zaa") {
            r++
        }


        element.removeClass("pieza");
    }
});