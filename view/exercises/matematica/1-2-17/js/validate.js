var n1 = 0;
var n2 = 0;
var n3 = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
        // console.log(elementid);
    }
});

$("#1").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "1" || element == "5"  || element == "6" || element == "7"  || element == "8"  || element == "9"  || element == "10") {
            n1++
            // console.log(n1);
        }
        element.removeClass("pieza");
    }
});
// dE
$("#2").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "2" || element == "3" || element == "4"  || element == "11") {
            n2++
            // console.log(n1);
        }
        element.removeClass("pieza");
    }
});
