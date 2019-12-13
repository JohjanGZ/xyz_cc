var ba = 0;
var bu = 0;
var bo = 0;
var be = 0;

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
        if (element == "bo") {
            bo++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 2
$("#2").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "bo") {
            bo++
            //console.log(bo);
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 3
$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "be") {
            be++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 4
$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "ba") {
            ba++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 5
$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "bu") {
            bu++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// 6
$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "bo") {
            bo++
        }
        ui.draggable.draggable("disable", 1);
    }
});