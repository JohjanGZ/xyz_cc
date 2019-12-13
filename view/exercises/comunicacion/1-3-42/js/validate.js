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
        if (element == "rr") {
            rr++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#7").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#8").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#9").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rr") {
            rr++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#10").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#11").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#12").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rm") {
            rm++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#13").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#14").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "r") {
            r++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});
$("#15").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rr") {
            rr++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});
