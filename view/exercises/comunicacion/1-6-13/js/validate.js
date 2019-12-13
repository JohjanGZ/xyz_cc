
var r = 0;


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
        if (element == "2") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#2").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "1") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#3").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "4") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#4").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "3") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#5").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "5") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});


$("#6").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "7") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#7").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "6") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#8").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "9") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#9").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "8") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#10").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "11") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#11").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "12") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});

$("#12").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "10") {
            r++
            console.log(r);
        }
        ui.draggable.draggable("disable", 1);
    }
});
