var tren = ['izquierda','mon', 'ma', 'ñil', 'ta', 'ba','ña', 'pes', 'al', 'na','derecha'];
var rtimg = "../../../exercises/comunicacion/1-6-11/img/";
for (let t1 = 0; t1 <6; t1++) {
    const element = tren[t1];
    $('.tren1').append("<div class='letras'><img src='"+rtimg+t1+".png' id='"+ element+"' alt='"+ element+"'></div>");
}
for (let t2 = 6; t2 < 11; t2++) {
    const element = tren[t2];
    $('.tren2').append("<div class='letras'><img src='"+rtimg+t2+".png' id='"+ element+"' alt='"+ element+"'></div>");
}


var r = 0;
var letra = "";
$('.letras img').click(function() {
    letra = $(this).attr('alt');
    // Estilos a span
    $('.letras img').css({ "transform": "scale(1)", "box-shadow": "none", "background": "transparent" });
    $(this).css({ "box-shadow": "0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23)", "background": "#B6ECFF" });
    // console.log(letra);
});
$('.p').click(function() {
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
    // console.log(r);
});