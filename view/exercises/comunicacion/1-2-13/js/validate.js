var r = 0;

var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-silabas2');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-silabas3');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");

    }
});

// ta
$("#titox").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tito") {
            r++
        }

        console.log(r);
        element.removeClass("pieza");
    }
});

// te
$("#tomax").droppable({

    drop: function(event, ui) {
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "toma") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

// ti
$("#tilax").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "tila") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

// to
$("#leox").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");
        if (element == "leo") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

// to2
$("#tomax2").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "toma2") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

// to2
$("#tex").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "te") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

// tu
$("#tux").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "tu") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

$("#topox").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "topo") {
            r++
        }


        console.log(r);
        element.removeClass("pieza");
    }
});

$("#peleax").droppable({

    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $("#" + element + " h4").css("background-color", "transparent");

        if (element == "pelea") {
            r++
        }
        console.log(r);
        element.removeClass("pieza");
    }
});