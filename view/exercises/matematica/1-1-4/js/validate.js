var n1 = 0;
var n2 = 0;

var la = document.querySelector('#listA');
for (var i = la.children.length; i >= 0; i--) {
    la.appendChild(la.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
    }
});

$("#1").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css({"background-color": "#B6ECFF", "border": "none"});
        $(this).css("background-color", "#B6ECFF");
        if (element == "1") {
            n1++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css({"background-color": "#B6ECFF", "border": "none"});
        $(this).css("background-color", "#B6ECFF");
        if (element == "2") {
            n2++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});
