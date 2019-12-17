// Funcion de arrastre
function arrastre() {
    $(".pieza").draggable({
        revert: "invalid",
        start: function () {
            element = $(this).attr("alt");
            elementid = $(this);
        }
    });
    $(".contenedor").droppable({
        drop: function (event, ui) {
            element2 = $(this).attr("alt");
            elementid.css({ "background-color": "transparent", "border": "none" });
            if (element == element2) {
                r++;
                console.log(r);
            }
            ui.draggable.draggable("disable", 1);
            console.log(element);
        }
    });
}

// Funcion de seleccion
function seleccion_click() {
    $('.seleccion').click(function () {
        $(this).css({
            "border": "2px solid",
            "border-color": "#37D3F7",
            "background": "#B6ECFF",
            "box-shadow": "grey 2px 3px 8px 0px"
        });
        var element = $(this).attr("alt");
        var select = $(this).attr("value");
        if (select != "seleccionado") {
            if (element == "n") {
                r++;
                $(this).attr("value", "seleccionado");
            } else {
                r--;
                $(this).attr("value", "seleccionado");
            }
        }
    });
}

// Funcion de seleccion
function seleccion_lista() {
    $(".seleccion").each(function () {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
}

// Funcion random
function listar_random($class) {
    var cols = document.querySelectorAll($class);
    [].forEach.call(cols, (e) => {
        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }
    });
}

// Funcion de sorteable
// Para usar esta funcion se tiene que tener todos los elementos en orden, imagenes, etc.
function ordenar_lista() {
    $("#sortable").sortable({
        update: function (event, ui) {
            var itemO = $('#sortable .lista-item').map(function () {
                return $.trim($(this).attr('id'));
            }).get();
            var itemD = $('#sortable .lista-item').map(function () {
                return $.trim($(this).attr('id'));
            }).get();
            itemD.sort();
            var order = JSON.stringify(itemO);
            var correct = JSON.stringify(itemD);
            if (order == correct) {
                r = true;
            } else {
                r = false;
            }
        }
    });
    $("#sortable").disableSelection();
}

// Funcion de crucigrama
function crucigrama() {
    var letra = "";
    $('.letras span').click(function () {
        letra = $(this).text();
        // Estilos a span
        $('.letras span').css({ "transform": "scale(1)", "border": "2px solid #37D3F7", "box-shadow": "none", "background": "transparent" });
        $(this).css({ "border": "solid #37D3F7", "box-shadow": "0 0 4px #00000057", "background": "#B6ECFF" });
    });
    $('.palabra').click(function () {
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
    });
}

// Funcion de colorear
function colorear() {
    // 1-2-5
}