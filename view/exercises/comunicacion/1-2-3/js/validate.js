var nU = 0;
var nD = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
    }
});
// uA
$("#uno").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(55, 211, 247, 0.14)");
        //  $( this ).target.append(event.target);
        if (element == "d") {
            nU++
        }
        ui.draggable.draggable("disable", 1);
    }
});

// dE
$("#dos").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(55, 211, 247, 0.14)");
        //  $( this ).target.append(event.target);

        if (element == "D") {
            nD++
        }
        ui.draggable.draggable("disable", 1);
    }
});
