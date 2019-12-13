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
        element = $(this).attr("id");
    }
});

var Npa = 0;
var Npe = 0;
var Npi = 0;
var Npo = 0;
var Npu = 0;

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
        if (element == "pa") {
            Npa++
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
        if (element == "pe") {
            Npe++
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

        if (element == "po") {
            Npu++
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

        if (element == "pi") {
            Npi++
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

        if (element == "pu") {
            Npo++
        }
        ui.draggable.draggable("disable", 1);
    }
});