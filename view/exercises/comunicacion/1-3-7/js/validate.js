var r = 0;
var ul = document.querySelector('.contenedor-respuesta');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul2 = document.querySelector('.b');
for (var i = ul2.children.length; i >= 0; i--) {
    ul2.appendChild(ul2.children[Math.random() * i | 0]);
}
var ul3 = document.querySelector('.c');
for (var i = ul3.children.length; i >= 0; i--) {
    ul3.appendChild(ul3.children[Math.random() * i | 0]);
}
var ul4 = document.querySelector('.d');
for (var i = ul4.children.length; i >= 0; i--) {
    ul4.appendChild(ul4.children[Math.random() * i | 0]);
}
var r = 0;
$('.a').click(function() {

    $(this).css({
        "border": "solid",
        "border-color": "#37D3F7"
    });
    var element = $(this).attr("alt");
    var select = $(this).attr("value");
    if (select != "seleccionado") {

        if (element == "n") {
            r++;
            $(this).attr("value", "seleccionado");
        } else {
            r--;
            $(this).attr("value", "seleccionado");
        }
    }
})