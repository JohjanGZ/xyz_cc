var p1 = 0;
var p2 = 0;
var p3 = 0;
var p4 = 0;
var p5 = 0;
var p6 = 0;
var p7 = 0;
var p8 = 0;
var p9 = 0;
var p10 = 0;
var p11 = 0;
var p12 = 0;
var p13 = 0;
var p14 = 0;
var p15 = 0;


var la = document.querySelector('#listA');
for (var i = la.children.length; i >= 0; i--) {
    la.appendChild(la.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.Ejemplo1');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.Ejemplo2');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.Ejemplo3');
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
        $(".pieza h4").css("background-color", "transparent");
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
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p2") {
            p2++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

// 3
$("#3").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p3") {
            p3++
        }
        element.removeClass("pieza");
    }
});

// 4
$("#4").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p4") {
            p4++
        }
        element.removeClass("pieza");
    }
});

// 5
$("#5").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p5") {
            p5++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

// 6
$("#6").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p6") {
            p6++
            //console.log(bo);
        }
        element.removeClass("pieza");
    }
});

// 7
$("#7").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p7") {
            p7++
        }
        element.removeClass("pieza");
    }
});

// 8
$("#8").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p8") {
            p8++
        }
        element.removeClass("pieza");
    }
});

// 9
$("#9").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p9") {
            p9++
        }
        element.removeClass("pieza");
    }
});

// 10
$("#10").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p10") {
            p10++
        }
        element.removeClass("pieza");
    }
});

// 11
$("#11").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p11") {
            p11++
        }
        element.removeClass("pieza");
    }
});

// 12
$("#12").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p12") {
            p12++
        }
        element.removeClass("pieza");
    }
});

// 13
$("#13").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p13") {
            p13++
        }
        element.removeClass("pieza");
    }
});

// 14
$("#14").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p14") {
            p14++
        }
        element.removeClass("pieza");
    }
});

// 15
$("#15").droppable({

    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "transparent");
        if (element == "p15") {
            p15++
        }
        element.removeClass("pieza");
    }
});