var r = 0;


$('.seleccion').click(function() {
    $(this).css({
        border: '2px solid',
        'border-color': '#37D3F7',
        background: '#B6ECFF',
        'box-shadow': 'grey 2px 3px 8px 0px',
    });
    $(this).attr("alt", "n");
});

function validarx() {
    $('.contenedor-ejercicios').each(function() {

        var num = $(this).attr('alt');
        var x = 0;


        $(this).children('.seleccion').each(function() {
            if ($(this).attr("alt") == "n") {
                x++;
            }
        });

        if (x == num) {
            r++;
        }
    });
}