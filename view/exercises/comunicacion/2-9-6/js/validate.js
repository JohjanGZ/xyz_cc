var r = 0;

var ul = document.querySelector('.contenedor-palabras');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
    }
});

$(".respuesta").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        elementid.css({
            "background-color": "transparent",
            "border-color": "transparent"
        });
        if (element == element2) {
            r++;
        }
        ui.draggable.draggable("disable", 1);
    }
});