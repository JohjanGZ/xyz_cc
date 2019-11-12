var nM = 0;
var nF = 0;


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
$("#masculino").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "#ffffff");
        //  $( this ).target.append(event.target);
        if (element == "v1" || element == "v2" || element == "v3" || element == "v4" || element == "v5" || element == "v6") {
            nM++
        }
        element.removeClass("pieza");
    }
});

// dE
$("#femenino").droppable({
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function(event, ui) {
        $(this).css("background-color", "#ffffff");
        //  $( this ).target.append(event.target);

        if (element == "v7" || element == "v8" || element == "v9" || element == "v10" || element == "v11" || element == "v12") {
            nF++
        }
        element.removeClass("pieza");
    }
});

