var ña = 0;
var ño = 0;

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
        if (element == "ña") {
            ña++
        }
        element.removeClass("pieza");
    }
});

// te
$("#2").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ño") {
            ño++
        }
        element.removeClass("pieza");
    }
});

// ti
$("#3").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ña") {
            ña++
        }
        element.removeClass("pieza");
    }
});

// to
$("#4").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "ña") {
            ña++
        }
        element.removeClass("pieza");
    }
});

// to2
$("#5").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "ño") {
            ño++
        }
        element.removeClass("pieza");
    }
});

// tu
$("#6").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "ño") {
            ño++
        }
        element.removeClass("pieza");
    }
});