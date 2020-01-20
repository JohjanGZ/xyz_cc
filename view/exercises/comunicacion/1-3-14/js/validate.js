var p1 = 0;
var p2 = 0;
var p3 = 0;
var p4 = 0;
var p5 = 0;
var p6 = 0;
var p7 = 0;
var p8 = 0;


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
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p1") {
            p1++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 2
$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p2") {
            p2++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 3
$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p3") {
            p3++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 4
$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p4") {
            p4++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 5
$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p5") {
            p5++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 6
$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p6") {
            p6++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 7
$("#7").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p7") {
            p7++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 8
$("#8").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "p8") {
            p8++
        }
        ui.draggable.draggable("disable", 1);
    }
});