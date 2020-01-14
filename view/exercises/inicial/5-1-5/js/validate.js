var lista = '.grid-lsta';
listar_random(lista);
    var r = 0;
    var color;
    var letra;
    var comparacion;
    $('.colores').click(function(e) {
        e.preventDefault();
        color = $(this).attr('value');
        letra = $(this).attr('letra');
        $('.colores').css({
            transform: 'scale(1)',
            border: '1px solid #333',
            'box-shadow': 'none',
        });
        $(this).css({
            transform: 'scale(1.1)',
            border: 'solid rgb(254, 206, 87)',
            'box-shadow': '0 0 1px #00000057',
        });
    });
    $('.lista').click(function(e) {
        e.preventDefault();
        $(this).css({
            'background-color': '#'+color+'',
            'background-repeat': 'no-repeat',
            'background-position': 'bottom',
            'background-size': 'cover',
            'font-size':'30px',
            'text-align':'center',
            'color':'#fff'
        });
        $(this).html(letra);
        comparacion = $(this).attr('alt');
        if (letra == comparacion) {
            r++;
        }
    });