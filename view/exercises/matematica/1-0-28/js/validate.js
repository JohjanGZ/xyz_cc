// var ul = document.querySelector('.grid-container');
// for (var i = ul.children.length; i >= 0; i--) {
//     ul.appendChild(ul.children[Math.random() * i | 0]);
// }

var r = 0;

$('.caja').click(function() {
    $(this).css({
        "border": "3px solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF"
    });
    $(this).append('✔');
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
    // console.log(r);
})