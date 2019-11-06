var r = 0;
var ul = document.querySelector('.contenedor-respuesta');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul2 = document.querySelector('.b');
for (var i = ul2.children.length; i >= 0; i--) {
    ul2.appendChild(ul2.children[Math.random() * i | 0]);
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