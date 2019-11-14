var r = 0;

var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('.contenedor-silabas2');
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
        if (element == "4") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#2").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "3") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#3").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "2") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#4").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "1") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#5").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "6") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});


$("#6").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "5") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#7").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "7") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});

$("#8").droppable({
    drop: function(event, ui) {
        $(".pieza h4").css("background-color", "#B6ECFF");
        if (element == "8") {
            r++
            console.log(r);
        }
        element.removeClass("pieza");
    }
});