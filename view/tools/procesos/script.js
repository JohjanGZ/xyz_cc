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
function seleccion_lista() {
    $(".seleccion").each(function () {
        if ($(this).attr("alt") == $(this).val()) {
            r++;
        }
    });
}
function listar_random($class) {
    var cols = document.querySelectorAll($class);
    [].forEach.call(cols, (e) => {
        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }
    });
}
function ordenar_lista() {
    $("#sortable").sortable({
        revert: "invalid",
    });
    $("#draggable").draggable({
        connectToSortable: "#sortable",
        helper: "clone",
        revert: "invalid",
    });
    // Sortable
    var items = $('#sortable .grid-item').map(function() {
        return $.trim($(this).attr('id'));
    }).get();
    var itsort = $('#sortable .grid-item').map(function() {
        return $.trim($(this).attr('id'));
    }).get();
    // Desordenar Lista
    itsort.sort();
    var itemD = JSON.stringify(items);
    var itemO = JSON.stringify(itsort);
}
function crucigrama() {


}
function colorear() {


}