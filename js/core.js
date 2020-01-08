'use strict';
//TODO: ***********************************************************************************************************
//TODO: *********************************** Funciones de ejercicios ***********************************************
//TODO: ***********************************************************************************************************

//TODO: Click aleatorio
$('html').click(function() {
    document.getElementById('click').play();
});
//TODO: Fin  Click aleatorio

//TODO: Sonido y hover
$('.pieza').hover(function() {
    document.getElementById('hover').play();
});
//TODO: Fin Sonido y hover

//TODO: Cronometro
var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;

function inicio() {
    var control = setInterval(cronometro, 10);
}

function parar() {
    clearInterval(control);
}

function reinicio() {
    clearInterval(control);
    centesimas = 0;
    segundos = 0;
    minutos = 0;
    horas = 0;
    Centesimas.innerHTML = '00';
    Segundos.innerHTML = '00';
    Minutos.innerHTML = '00';
    Horas.innerHTML = '00';
}

function cronometro() {
    if (centesimas < 99) {
        centesimas++;
        if (centesimas < 10) {
            centesimas = '0' + centesimas;
        }
        Centesimas.innerHTML = centesimas;
    }
    if (centesimas == 99) {
        centesimas = -1;
    }
    if (centesimas == 0) {
        segundos++;
        if (segundos < 10) {
            segundos = '0' + segundos;
        }
        Segundos.innerHTML = segundos;
    }
    if (segundos == 59) {
        segundos = -1;
    }
    if (centesimas == 0 && segundos == 0) {
        minutos++;
        if (minutos < 10) {
            minutos = '0' + minutos;
        }
        Minutos.innerHTML = minutos;
    }
    if (minutos == 59) {
        minutos = -1;
    }
    if (centesimas == 0 && segundos == 0 && minutos == 0) {
        horas++;
        if (horas < 10) {
            horas = '0' + horas;
        }
        Horas.innerHTML = horas;
    }
}
//TODO: Fin cronometro

//TODO: correcto e incorrecto
function correcto() {
    document.getElementById('bien').play();
    $('#correcto').css('display', 'block');
    $('#correcto').css('z-index', '55');
    // $(".btnEnviar").css("opacity", "0.3");
    $('.btnEnviar').css('pointer-events', 'none');
    $('.btnEnviar').addClass('disabled');
    $('.btnCorregir').addClass('disabled');
    $('.btnSiguiente').removeClass('disabled');
    $('.btn6').addClass('disabled');
    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ':' + seg + ':' + milseg;
    var nota = parseInt($('#nota').val()) + 1;
    $('#nota').attr('value', nota);
    reinicio();
    parar();
    return true;
}
$('#intentos').html(count);

function incorrecto() {
    document.getElementById('fallo').play();
    $('#incorrecto').css('display', 'block');
    $('#incorrecto').css('z-index', '55');
    count--;
    $('#intentos').html(count);
    if (count == 0) {
        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ':' + seg + ':' + milseg;
        $('.btnEnviar').css('opacity', '0.3');
        $('.btnCorregir').css('opacity', '0.3');
        $('.btnEnviar').addClass('disabled');
        $('.btnCorregir').addClass('disabled');
        $('.btn6').addClass('disabled');
        $('#respuesta').css('display', 'block');
        $('.btn-intentos').css(
            'background-image',
            'linear-gradient(to right, rgb(230, 66, 66), rgb(255, 0, 0))'
        );
        $('.btnSiguiente').removeClass('disabled');
        reinicio();
        parar();
    }
    return false;
}
$('.modal-close').click(function() {
    $('#incorrecto').css('display', 'none');
    $('#correcto').css('display', 'none');
});
//TODO:  Fin correcto e incorrecto

$(document).ready(function() {
    //TODO: Menu lateral
    $('.sidenav').sidenav();
    //TODO: tooltip comentarios
    $('.tooltipped').tooltip();
    //TODO: Boton Flotante
    $('.fixed-action-btn').floatingActionButton();
    //TODO: MODAL COMENTARIOS DE AYUDA
    $('.modal').modal();
    $('#correcto').modal();
    $('#incorrecto').modal();
    $('.materialboxed').materialbox();
});

//? ***********************************************************************************************************
//? *********************************** Funciones de ejercicios ***********************************************
//? ***********************************************************************************************************

//? Funcion de arrastre -> clases a usar .pieza (las opciones), .contenedor (caja donde van las opciones)
//? Declarar siempre la variable r -> var r = 0;
function arrastre() {
    var element;
    var elementid;
    var element2;
    $('.pieza').draggable({
        revert: 'invalid',
        start: function() {
            element = $(this).attr('alt');
            elementid = $(this);
        }
    });
    $(".contenedor").droppable({
        drop: function (event, ui) {
            element2 = $(this).attr("alt");
            $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
            elementid.css({ "background": "transparent", "border-color": "transparent" });
            if (element == element2) {
                r++;
                // console.log(r);
            }
            ui.draggable.draggable('disable', 1);
        },
    });
}

//? Funcion de seleccion -> clases a usar .seleccion
//? Declarar siempre la variable r -> var r = 0;
function seleccion_click() {
    $('.seleccion').click(function() {
        $(this).css({
            border: '2px solid',
            'border-color': '#37D3F7',
            background: '#B6ECFF',
            'box-shadow': 'grey 2px 3px 8px 0px',
        });
        var element = $(this).attr('alt');
        var select = $(this).attr('value');
        if (select != 'seleccionado') {
            if (element == 'n') {
                r++;
                $(this).attr('value', 'seleccionado');
            } else {
                r--;
                $(this).attr('value', 'seleccionado');
            }
        }
    });
}

//? Funcion de seleccion -> clases a usar .seleccion, esta funcion sera agregada en el result del index
//? Declarar siempre la variable r -> r = 0;
function seleccion_lista() {
    $('.seleccion').each(function() {
        if ($(this).attr('alt') == $(this).val()) {
            r++;
        }
    });
}

//? Funcion random -> enviar las clases que var a incorporar el random ejemplo:
//? lista_random($clases) o listar_random('.clases')
function listar_random($class) {
    var cols = document.querySelectorAll($class);
    [].forEach.call(cols, e => {
        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[(Math.random() * i) | 0]);
        }
    });
}

//? Funcion de sorteable
//? #sortable -> .lista-item -> lista-item debe tener el #id según el orden de la respuesta correcta y si se usan imagenes las imagenes deben estar en orden según la respuesta correcta
//? Declarar siempre la variable r -> var r = false;
function ordenar_lista() {
    $('#sortable').sortable({
        update: function(event, ui) {
            var itemO = $('#sortable .lista-item')
                .map(function() {
                    return $.trim($(this).attr('id'));
                })
                .get();
            var itemD = $('#sortable .lista-item')
                .map(function() {
                    return $.trim($(this).attr('id'));
                })
                .get();
            itemD.sort();
            var order = JSON.stringify(itemO);
            var correct = JSON.stringify(itemD);
            if (order == correct) {
                r = true;
            } else {
                r = false;
            }
        },
    });
    $('#sortable').disableSelection();
}

//? Funcion de abecedario -> <div id="abecedario"></div> para mostrar el abecedario
function abecedario() {
    var array = [
        'a',
        'b',
        'c',
        'd',
        'e',
        'f',
        'g',
        'h',
        'i',
        'j',
        'k',
        'l',
        'm',
        'n',
        'ñ',
        'o',
        'p',
        'q',
        'r',
        's',
        't',
        'u',
        'v',
        'w',
        'x',
        'y',
        'z',
    ];
    for (let abc = 0; abc < array.length; abc++) {
        const element = array[abc];
        $('#abecedario').append(
            "<div class='letras' id='" + element + "'>" + element + '</div>'
        );
    }
}

//? Funcion de números -> <div id="numeros"></div> para mostrar el teclado de número
function numeros() {
    for (let abc = 0; abc < 10; abc++) {
        $('#numeros').append(
            "<div class='letras' id='" + abc + "'>" + abc + '</div>'
        );
    }
}

//? Funcion de crucigrama - Clases -> .letras (abecedario), .palabra (caja de crucigrama)
//? Declarar siempre la variable r -> var r = 0;
function crucigrama() {
    var letra = '';
    $('.letras').click(function() {
        letra = $(this).text();
        // Estilos a span
        $('.letras').css({
            transform: 'scale(1)',
            border: '2px solid #37D3F7',
            'box-shadow': 'none',
            background: 'transparent',
        });
        $(this).css({
            border: 'solid #37D3F7',
            'box-shadow': '0 0 4px #00000057',
            background: '#B6ECFF',
        });
    });
    $('.palabra').click(function() {
        $(this).css({ border: 'solid #37D3F7', background: '#B6ECFF' });
        if ($(this).attr('alt') == letra) {
            if ($(this).text() == '') {
                r++;
            } else {
                if ($(this).text() != $(this).attr('alt')) {
                    r = r + 2;
                }
            }
        } else {
            if ($(this).text() == '') {
                r--;
            } else {
                if ($(this).text() == $(this).attr('alt')) {
                    r = r - 2;
                }
            }
        }
        $(this).text(letra);
    });
}

//? Funcion de opreaciones Suma, resta, multiplicacion, division  - Clases -> .letras (numeros), .total (caja de total)
//? Declarar siempre la variable r -> var r = 0;
function operaciones() {
    var letra = '';
    $('.letras').click(function() {
        letra = $(this).text();
        // Estilos a span
        $('.letras').css({
            transform: 'scale(1)',
            border: '2px solid #37D3F7',
            'box-shadow': 'none',
            background: 'transparent',
        });
        $(this).css({
            border: 'solid #37D3F7',
            'box-shadow': '0 0 4px #00000057',
            background: '#B6ECFF',
        });
    });
    $('.total').click(function() {
        $(this).css({ border: 'solid #37D3F7', background: '#B6ECFF' });
        if ($(this).attr('alt') == letra) {
            if ($(this).text() == '') {
                r++;
            } else {
                if ($(this).text() != $(this).attr('alt')) {
                    r = r + 2;
                }
            }
        } else {
            if ($(this).text() == '') {
                r--;
            } else {
                if ($(this).text() == $(this).attr('alt')) {
                    r = r - 2;
                }
            }
        }
        $(this).append(letra);
        console.log(r);
    });
}

//? Funcion de colorear
//? Clases a usar -> .colores (colores de muestra), .lista (lista de opciones)
//? Declarar siempre la variable r -> var r = 0;
//1-2-5
function colorear() {
    var color;
    var letra;
    var comparacion;
    $('.colores').click(function(e) {
        e.preventDefault();
        color = $(this).attr('value');
        letra = $(this).attr('alt');
        $('.colores').css({
            transform: 'scale(1)',
            border: 'none',
            'box-shadow': 'none',
        });
        $(this).css({
            transform: 'scale(1.1)',
            border: 'solid rgb(254, 206, 87)',
            'box-shadow': '0 0 4px #00000057',
        });
    });
    $('.lista').click(function(e) {
        e.preventDefault();
        $(this).css({
            'background-color': color,
        });
        comparacion = $(this).attr('alt');
        if (letra == comparacion) {
            r++;
        }
    });
}

function operacion_numeros() {
    var letra = '';
    $('.letras').click(function() {
        letra = $(this).text();
        // Estilos a span
        $('.letras').css({
            transform: 'scale(1)',
            border: '2px solid #37D3F7',
            'box-shadow': 'none',
            background: 'transparent',
        });
        $(this).css({
            border: 'solid #37D3F7',
            'box-shadow': '0 0 4px #00000057',
            background: '#B6ECFF',
        });
    });

    $('.total').click(function() {
        $(this).css({ border: 'solid #37D3F7', background: '#B6ECFF' });

        $(this).append(letra);
    });
}
// Función para comprobar la operación de arriba :v, funciona igual que "seleccionar_lista()"
function comprobar_operacion_numeros() {
    $('.resolver').each(function() {
        var tx = $(this).text().trim();

        if (tx == $(this).attr('alt')) {
            r++;
        }
    });
}