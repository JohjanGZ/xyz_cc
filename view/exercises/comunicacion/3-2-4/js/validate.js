var r = 0;

var cols = document.querySelectorAll('.ejercicio');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});


$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
    }
});

$(".palabra").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        elementid.css({
            "background-color": "transparent",
            "color": "black",
            "border-color": "transparent"
        });
        if (element == element2) {
            r++;
        }
        element.removeClass("pieza");
    }
});