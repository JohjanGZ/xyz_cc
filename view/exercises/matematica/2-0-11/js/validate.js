var lb = document.querySelector('.opciones');
for (var n = lb.children.length; n >= 0; n--) {
    lb.appendChild(lb.children[Math.random() * n | 0]);
}
var la = document.querySelector('.grid-container');
for (var i = la.children.length; i >= 0; i--) {
    la.appendChild(la.children[Math.random() * i | 0]);
}

var r = 0 ;

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementExtra = $(this).attr("data");
        elementid = $(this);
        // console.log(elementid);
    }
});

$(".caja").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(255,255,255, 0.14)");
        $(this).css("box-shadow", "none");
        element2 = $(this).attr("alt");
        element2Extra = $(this).attr("data");
        elementid.css("background-color", "transparent");
        if (element == element2 || element == element2Extra) {
            r++;
        }

        element.removeClass("pieza");
    }
});