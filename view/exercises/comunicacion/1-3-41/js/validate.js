var rra = 0;
var rre = 0;
var rro = 0;
var rru = 0;

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
        if (element == "rro") {
            rro++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rra") {
            rra++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rre") {
            rre++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rra") {
            rra++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rre") {
            rre++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rra") {
            rra++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#7").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rro") {
            rro++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#8").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rro") {
            rro++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#9").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rro") {
            rro++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#10").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rro") {
            rro++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#11").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rru") {
            rru++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#12").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "rra") {
            rra++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});
