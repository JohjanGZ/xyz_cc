var r = 0;

var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-ejercicios');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
    }
});

$(".table-respuesta").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        elementid.css("background-color", "transparent");
        console.log(element2);
        if (element2 == "estado") {
            var num = $(this).attr("numero");
            var attralt = elementid.attr("estado");

            $("." + num).attr("alt", attralt);

            if (element == element2) {
                r++;
            }

        } else {
            if (element == element2) {
                r++;
            }
        }

        console.log(r);
        element.removeClass("pieza");
    }
});