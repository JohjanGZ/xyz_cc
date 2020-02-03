// var ul = document.querySelector('#contenedorpuzzle div');
// for (var i = ul.children.length; i >= 0; i--) {
//     ul.appendChild(ul.children[Math.random() * i | 0]);
// }

var r = 0;
var forma = "";
var letra = "";
abecedario();
$('.letras').click(function() {
    forma = $(this).attr('id');
    letra = $(this).attr('id');
    // Estilos a span
    $('.figura-2 img').css({ "box-shadow": "none", "background": "transparent" });
    $(this).css({ "box-shadow": "0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)", "background": "transparent" });

});
$('.p').click(function() {
    $(this).css({
        "display":"grid",
        "align-items": "flex-start",
        "justify-items":"center",
        "color":"#000",
        "font-size":"22px",
        "font-weight":"600"});
    $(this).html(letra);
    if ($(this).attr("alt") == forma) {
        if ($(this).text() !== "") {
            r++;
        } else {
            if ($(this).text() != $(this).attr("alt")) {
                r = r + 2;
            }
        }
    } else {
        if ($(this).text() == "") {
            r--;
        } else {
            if ($(this).text() == $(this).attr("alt")) {
                r = r - 2;
            }
        }
    }
    $(this).text(forma);
    // console.log(letra);
    console.log(r);
});