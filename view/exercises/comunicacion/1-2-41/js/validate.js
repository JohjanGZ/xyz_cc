var r = 0;
var b = false;
var c = false;

var ul = document.querySelector('.contenedor-silabas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

$(".pieza").draggable({
    start: function() {
        element = $(this).attr("alt");
        elementid = $(this);
    }
});

$(".palabra").droppable({
    drop: function(event, ui) {
        $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
        element2 = $(this).attr("alt");
        fila = $(this).attr("fila");
        elementid.css("background-color", "transparent");

        if (element == "m" || element == "f") {
            if (fila == "dos") {
                if (element == "m") {
                    console.log(b);
                    if (!b) {
                        r++;
                        b = true;
                        console.log(b);
                        console.log(r);


                    }
                } else {
                    r++;

                }
            } else {
                if (fila == "tres") {
                    if (element == "m") {
                        if (!c) {
                            r++;
                            c = true;
                        }
                    } else {
                        r++;
                    }
                } else {
                    if (element == element2) {
                        r++;
                    }
                }
            }
        }




        element.removeClass("pieza");
    }
});