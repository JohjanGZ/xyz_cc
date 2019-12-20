r = 0;

$('.seleccion').click(function () {
    $(this).css({
        "border": "1px solid",
        "border-color": "rgb(131, 121, 121)",
        "text-align": "center",
        "font-size" : "35px",
        "font-weight": "600",
        "line-height" : "0px",
    });
    $(this).html("x")
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

listar_random(".aleatorio");