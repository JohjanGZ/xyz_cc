'use strict'
$("html").click(function() {
    document.getElementById('click').play();
});

$(".pieza").hover(function() {
    $(".pieza").css({ "box-shadow": "none" });
    $(this).css({ "box-shadow": "2px 3px 8px 0px grey" });
    document.getElementById('hover').play();
});

if (document.querySelector('#contenedorPiezas ul')) {
    var ul = document.querySelector('#contenedorPiezas ul');
    for (var i = ul.children.length; i >= 0; i--) {
        ul.appendChild(ul.children[Math.random() * i | 0]);
    }
}



var centesimas = 0;
var segundos = 0;
var minutos = 0;
var horas = 0;

function inicio() {
    control = setInterval(cronometro, 10);
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
    Centesimas.innerHTML = "00";
    Segundos.innerHTML = "00";
    Minutos.innerHTML = "00";
    Horas.innerHTML = "00";
}

function cronometro() {
    if (centesimas < 99) {
        centesimas++;
        if (centesimas < 10) { centesimas = "0" + centesimas }
        Centesimas.innerHTML = centesimas;
    }
    if (centesimas == 99) {
        centesimas = -1;
    }
    if (centesimas == 0) {
        segundos++;
        if (segundos < 10) { segundos = "0" + segundos }
        Segundos.innerHTML = segundos;
    }
    if (segundos == 59) {
        segundos = -1;
    }
    if ((centesimas == 0) && (segundos == 0)) {
        minutos++;
        if (minutos < 10) { minutos = "0" + minutos }
        Minutos.innerHTML = minutos;
    }
    if (minutos == 59) {
        minutos = -1;
    }
    if ((centesimas == 0) && (segundos == 0) && (minutos == 0)) {
        horas++;
        if (horas < 10) { horas = "0" + horas }
        Horas.innerHTML = horas;
    }
}
// --------------------------------- CRONOMETRO  GENERAL------------------------------
////////////////////////////////////////////////////////////////////////////////////////
//---------------------------  correcto e incorrecto   -----------------------------------------
function correcto() {

    document.getElementById('bien').play();

    $('#correcto').css("display", "block");
    $('#correcto').css("z-index", "55");

    // $(".btnEnviar").css("opacity", "0.3");
    $(".btnEnviar").css("pointer-events", "none");
    $(".btnEnviar").addClass("disabled");
    $(".btnCorregir").addClass("disabled");
    $(".btnSiguiente").removeClass("disabled");
    $(".btn6").addClass("disabled");


    var min = $('#Minutos').text();
    var seg = $('#Segundos').text();
    var milseg = $('#Centesimas').text();
    var tiempo = min + ":" + seg + ":" + milseg;

    var nota = parseInt($("#nota").val()) + 1;
    $("#nota").attr("value", nota);


    reinicio();
    parar();
    return true;
}

$('#intentos').html(count);

function incorrecto() {
    document.getElementById('fallo').play();
    $('#incorrecto').css("display", "block");
    $('#incorrecto').css("z-index", "55");
    count--;
    $('#intentos').html(count);
    if (count == 0) {

        var min = $('#Minutos').text();
        var seg = $('#Segundos').text();
        var milseg = $('#Centesimas').text();
        var tiempo = min + ":" + seg + ":" + milseg;

        $(".btnEnviar").css("opacity", "0.3");
        $(".btnCorregir").css("opacity", "0.3");
        $(".btnEnviar").addClass("disabled");
        $(".btnCorregir").addClass("disabled");
        $(".btn6").addClass("disabled");
        $("#respuesta").css("display", "block");

        $(".btn-intentos").css("background-image", "linear-gradient(to right, rgb(230, 66, 66), rgb(255, 0, 0))");
        $(".btnSiguiente").removeClass("disabled");

        reinicio();
        parar();

    }
    return false;
}


//------------------------ LUPA

$(document).ready(function(){

    /* This code is executed on the document ready event */

    var left    = 0,
        top        = 0,
        sizes    = { retina: { width:190, height:190 }, webpage:{ width:500, height:283 } },
        webpage    = $('#webpage'),
        offset    = { left: webpage.offset().left, top: webpage.offset().top },
        retina    = $('#retina');

    if(navigator.userAgent.indexOf('Chrome')!=-1)
    {
        /*    Applying a special chrome curosor,
            as it fails to render completely blank curosrs. */
            
        retina.addClass('chrome');
    }
    
    webpage.mousemove(function(e){

        left = (e.pageX-offset.left);
        top = (e.pageY-offset.top);

        if(retina.is(':not(:animated):hidden')){
            /* Fixes a bug where the retina div is not shown */
            webpage.trigger('mouseenter');
        }

        if(left<0 || top<0 || left > sizes.webpage.width || top > sizes.webpage.height)
        {
            /*    If we are out of the bondaries of the
                webpage screenshot, hide the retina div */

            if(!retina.is(':animated')){
                webpage.trigger('mouseleave');
            }
            return false;
        }

        /*    Moving the retina div with the mouse
            (and scrolling the background) */

        retina.css({
            left                : left - sizes.retina.width/2,
            top                    : top - sizes.retina.height/2,
            backgroundPosition    : '-'+(1.6*left)+'px -'+(1.35*top)+'px'
        });
        
    }).mouseleave(function(){
        retina.stop(true,true).fadeOut('fast');
    }).mouseenter(function(){
        retina.stop(true,true).fadeIn('fast');
    });
});


$(".modal-close").click(function() {
    $('#incorrecto').css("display", "none");
    $('#correcto').css("display", "none")
});


//-------------------------------------------  Menu lateral -----------------------------------------------
$(document).ready(function() {
    $('.sidenav').sidenav();
});

//-------------------------------------------  tooltip comentarios -----------------------------------------------

$(document).ready(function() {
    $('.tooltipped').tooltip();
});

//-------------------------------------------  Boton Flotante -----------------------------------------------
$(document).ready(function() {
    $('.fixed-action-btn').floatingActionButton();
});

//------------------------  MODAL COMENTARIOS DE AYUDA ---------------
$(document).ready(function() {
    $('.modal').modal();
});
$(document).ready(function() {
    $('#correcto').modal();
});
$(document).ready(function() {
    $('#incorrecto').modal();
});
$(document).ready(function(){
    $('.materialboxed').materialbox();
});