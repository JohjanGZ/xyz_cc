var r = 0;
var ta = 0;
var te = 0;
var ti = 0;
var to = 0;
var to2 = 0;
var tu = 0;

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
        if (element == "taa") {
            ta++
        }
        element.removeClass("pieza");
    }
});

// te
$("#te").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tee") {
            te++
        }
        element.removeClass("pieza");
    }
});

// ti
$("#ti").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tii") {
            ti++
        }
        element.removeClass("pieza");
    }
});

// to
$("#to").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "too" || element == "too2") {
            to++
        }
        element.removeClass("pieza");
    }
});

// to2
$("#to2").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "too" || element == "too2") {
            to2++
        }
        element.removeClass("pieza");
    }
});

// tu
$("#tu").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "tu") {
            to2++
        }
        element.removeClass("pieza");
    }
});