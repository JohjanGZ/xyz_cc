var lista = '.grid-lsta';
listar_random(lista);
    var r = 0;
    var tamano;
    var letra;
    var comparacion;
    $('.colores').click(function(e) {
        e.preventDefault();
        tamano = $(this).attr('value');
        scale= $(this).attr('tamano');
        letra = $(this).attr('alt');
        $('.colores').css({
            transform: 'scale(1)',
            border: 'none',
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
            'background-image': 'url(../../../../exercises/inicial/5-1-4/img/'+2+'.png)',
            transform: 'scale(1.'+scale+')',
            'background-repeat': 'no-repeat',
            'background-position': 'center',
            'background-size': 'cover',
            'font-size':'30px',
            'text-align':'center',
            'color':'#fff'
        });
        comparacion = $(this).attr('alt');
        if (letra == comparacion) {
            r++;
        }
    });