var la = document.querySelector('.grid-container');
for (var i = la.children.length; i >= 0; i--) {
    la.appendChild(la.children[Math.random() * i | 0]);
}
var lb = document.querySelector('.opciones');
for (var n = lb.children.length; n >= 0; n--) {
    lb.appendChild(lb.children[Math.random() * n | 0]);
}


var r = 0 ;

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
        // console.log(elementid);
    }
});

$(".caja").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        elementid.css("background-color", "transparent");
        if (element == element2) {
            r++;
        }
        ui.draggable.draggable("disable", 1);
    }
});