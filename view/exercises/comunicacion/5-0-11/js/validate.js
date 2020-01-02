var r = 0;
var clases = ".contenedor-respuesta, .contenedor-silabas";
listar_random(clases);
var element;
var elementid;
var element2;
$(".pieza").draggable({
    revert: "invalid",
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);

    }
});
$(".contenedor").droppable({
    drop: function(event, ui) {
        element2 = $(this).attr("alt");
        elementid.css({
            "background": "transparent",
            "border-color": "transparent",
            "-webkit-text-stroke": "1px white"
        });
        $(this).css({
            "background-color": "transparent",
            "border-color": "transparent"
        })
        if (element == element2) {
            r++;
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});