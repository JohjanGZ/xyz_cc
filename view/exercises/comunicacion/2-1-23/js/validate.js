var nA = 0;
var nE = 0;
var nI = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("id");
    }
});
// uA
$("#uA").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "vA") {
            nA++
        }
        element.removeClass("pieza");
    }
});

// dE
$("#dE").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vE") {
            nE++
        }
        element.removeClass("pieza");
    }
});

//tI
$("#tI").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "vI") {
            nI++
        }
        element.removeClass("pieza");
    }
});