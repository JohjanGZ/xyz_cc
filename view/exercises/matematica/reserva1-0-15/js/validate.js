// var ul = document.querySelector('#contenedorpuzzle div');
// for (var i = ul.children.length; i >= 0; i--) {
//     ul.appendChild(ul.children[Math.random() * i | 0]);
// }

var r = 0;
var forma = "";
$('.figura img').click(function() {
    forma = $(this).attr('alt');
    img = $(this).attr('src');
    // Estilos a span
    $('.figura img').css({ "box-shadow": "none", "background": "transparent" });
    $(this).css({ "box-shadow": "0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)", "background": "transparent" });

});
$('.p div').click(function() {
    console.log(img);
    $(this).css({ "background-image": "url(" + img + ")", "background-size": "contain", "background-repeat": "no-repeat", "background-position": "center", "width": "100%", "height": "100%" });
    if ($(this).attr("alt") == forma) {
        if ($(this).text() == "") {
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