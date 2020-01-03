r= 0;
$('.seleccion').click(function () {
    $(this).css({
        "border": "2px solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF",
        "box-shadow": "grey 2px 3px 8px 0px",
        "text-align": "center",
        "font-size": "44px",
        "font-weight" : "500px",
        "line-height" : "20px"
    });
    $(this).html("x");

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