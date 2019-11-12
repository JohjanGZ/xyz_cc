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
$("#naa").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na" || element == "naa2" || element == "naa3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);
    }
});
console.log(r);

$("#naa2").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na" || element == "na2" || element == "na3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);

    }
});

$("#naa3").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "na" || element == "na2" || element == "na3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);

    }
});

$("#noo").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no" || element == "no2" || element == "no3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);

    }
});

$("#noo2").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no" || element == "no2" || element == "no3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);

    }
});

$("#noo3").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        $("#" + element).css("background-color", "transparent");
        if (element == "no" || element == "no2" || element == "no3") {
            r++;
        }
        element.removeClass("pieza");
        console.log(r);

    }
});