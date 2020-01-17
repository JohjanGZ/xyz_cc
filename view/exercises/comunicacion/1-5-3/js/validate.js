var array = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];
for (let abc = 0; abc < array.length; abc++) {
  const element = array[abc];
  // console.log(element);
  $('.abecedario').append("<div class='letras'><span  id='" +element + "'>" +element  + "</span></div>");
}

// New on() style:
// $('.letras').on('click', 'span', function(event) {
//     event.preventDefault();
//     letras = null; // texto  de la clase .palabra
//     letras = $(this).text();
//     // Estilos a span
//     $('.letras span').css({ "transform": "scale(1)", "border": "2px solid #37D3F7", "box-shadow": "none", "background": "transparent" });
//     $(this).css({ "border": "solid #37D3F7", "box-shadow": "0 0 4px #00000057", "background": "#B6ECFF" });
//     // validando click de la clase palabra
//     $('.palabra').one('click', function(event) {
//         event.preventDefault();
//         $(this).css({ "border": "solid #37D3F7", "background": "#B6ECFF" });
//         $(this).text(letras);
//     });
// });
var r = 0;
var letra = "";
$('.letras span').click(function() {
    letra = $(this).text();
    // Estilos a span
    $('.letras span').css({ "transform": "scale(1)", "border": "2px solid #37D3F7", "box-shadow": "none", "background": "transparent" });
    $(this).css({ "border": "solid #37D3F7", "box-shadow": "0 0 4px #00000057", "background": "#B6ECFF" });
    // console.log(letra);
});
$('.palabra').click(function() {
    $(this).css({ "border": "solid #37D3F7", "background": "#B6ECFF" });
    if ($(this).attr("alt") == letra) {
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
    $(this).text(letra);
    // console.log(letra);
    console.log(r);
});