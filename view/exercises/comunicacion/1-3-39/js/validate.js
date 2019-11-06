var p1 = 0;
var p2 = 0;
var p3 = 0;

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
    }
});

// 1
$("#1").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css({"background-color":"transparent"});
        if (element == "p1") {
            p1++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

// 2
$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css({"background-color":"transparent"});
        if (element == "p3") {
            p2++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

// 3
$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css({"background-color":"transparent"});
        if (element == "p2") {
            p3++
        }
        element.removeClass("pieza");
    }
});