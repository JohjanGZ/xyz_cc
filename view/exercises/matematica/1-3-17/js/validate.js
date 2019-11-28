var lb = document.querySelector('.opciones');
for (var n = lb.children.length; n >= 0; n--) {
    lb.appendChild(lb.children[Math.random() * n | 0]);
}

var r = 0 ;

$(".pieza").draggable({
    revert: true,
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
        elementid.css({"background-color":"transparent","border":"none"});
        if (element == element2) {
            r++;
        }
        element.removeClass("pieza");
    }
});