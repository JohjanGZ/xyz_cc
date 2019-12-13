var cols = document.querySelectorAll('.grid-options');
// console.log(cols);
[].forEach.call(cols, (e) => {
    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }
});
// Droppable
var r = 0 ;
$(".pieza").draggable({
    revert: "invalid",
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
        // console.log(elementid);
    }
});

$(".caja").droppable({
    drop: function(event, ui) {
        // $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        elementid.css({"background-color":"transparent","border":"none"});
        if (element == element2) {
            r++;
        }
        ui.draggable.draggable("disable", 1);

        console.log(element);
    }
});