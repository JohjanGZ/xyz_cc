var lb = document.querySelector('#listB');
for (var n = lb.children.length; n >= 0; n--) {
    lb.appendChild(lb.children[Math.random() * n | 0]);
}
var la = document.querySelector('.grid-layout');
for (var i = la.children.length; i >= 0; i--) {
    la.appendChild(la.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
    }
});

var Nda = 0;
var Ndo = 0;
var Nde = 0;
var NdA = 0;
var NdE = 0;

// uno
$("#uno").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $(".box").css("background-color", "transparent");
        //  $( this ).target.append(event.target);
        if (element == "da") {
            Nda++
        }
        ui.draggable.draggable("disable", 1);
    }
});
// dos
$("#dos").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $(".box").css("background-color", "transparent");
        //  $( this ).target.append(event.target);s
        if (element == "do") {
            Ndo++
        }
        ui.draggable.draggable("disable", 1);
    }
});
//tres
$("#tres").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $(".box").css("background-color", "transparent");
        //  $( this ).target.append(event.target);

        if (element == "de") {
            Nde++
        }
        ui.draggable.draggable("disable", 1);
    }
});
//cuatro
$("#cuatro").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $(".box").css("background-color", "transparent");
        //  $( this ).target.append(event.target);

        if (element == "da") {
            NdA++
        }
        ui.draggable.draggable("disable", 1);
    }
});
//cinco
$("#cinco").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "transparent");
        $(".box").css("background-color", "transparent");
        //  $( this ).target.append(event.target);

        if (element == "de") {
            NdE++
        }
        ui.draggable.draggable("disable", 1);
    }
});