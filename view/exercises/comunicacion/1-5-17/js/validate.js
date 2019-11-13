var arr = ['a', 'z'];
for (var i = arr[0].charCodeAt(); i <= arr[1].charCodeAt(); i++) {
    $('.abecedario').append("<div class='letras'><span  id='" + String.fromCharCode(i) + "'>" + String.fromCharCode(i) + "</span></div>");
    // console.log(i);
}

var r = 0;
var letra = "";

// New on() style:
$('.letras span').click(function() {
    letra = $(this).text();
    // Estilos a span
    $('.letras span').css({ "transform": "scale(1)", "border": "2px solid #37D3F7", "box-shadow": "none", "background": "transparent" });
    $(this).css({ "border": "solid #37D3F7", "box-shadow": "0 0 4px #00000057", "background": "#B6ECFF" });
<<<<<<< HEAD

=======
    console.log(letra)
>>>>>>> 5e4c2eb7897d46857d4fc5d8bf8fb76b728cac73
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
<<<<<<< HEAD



=======
    console.log(letra);
    console.log(r);
>>>>>>> 5e4c2eb7897d46857d4fc5d8bf8fb76b728cac73
});