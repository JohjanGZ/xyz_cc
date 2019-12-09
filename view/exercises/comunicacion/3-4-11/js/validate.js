// var cols = document.querySelectorAll('.contenedor-check');

// [].forEach.call(cols, (e) => {

//     for (var i = e.children.length; i >= 0; i--) {
//         e.appendChild(e.children[Math.random() * i | 0]);
//     }

// });
var cont = 0;
$('.uno .palabra-img').click(function() {
    var element = $(this).attr('alt');
    cont++;
    if (cont < 3) {
        $('.uno').children('h5').append(' ' + element + ',');
    } else {
        if (cont == 4) {
            $('.uno').children('h5').append(' y ' + element + ".");
        } else {
            $('.uno').children('h5').append(' ' + element + ' ');
        }
    }

    r++;
});
var cont2 = 0;
$('.dos .palabra-img').click(function() {
    var element = $(this).attr('alt');
    cont2++;
    if (cont2 < 3) {
        $('.dos').children('h5').append(' ' + element + ',');
    } else {
        if (cont2 == 4) {
            $('.dos').children('h5').append(' y ' + element + ".");
        } else {
            $('.dos').children('h5').append(' ' + element + ' ');
        }
    }
    r++;
});