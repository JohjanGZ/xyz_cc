var rr = 0;
var r = 0;
var rm = 0;

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

$("#1").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rr") {
            rr++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rr") {
            rr++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rm") {
            rm++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});
