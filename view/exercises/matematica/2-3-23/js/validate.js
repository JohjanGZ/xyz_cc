    $('select').formSelect();
    var r = 0;
    $('.seleccion').click(function () {
        $(this).css({
            "border": "solid",
            "border-color": "#37D3F7",
            "background": "#37D3F7",
            "color":"#fff",
            "font-size": "50px",
            "line-height":"40px",
            "font-weight":"400",
            "transition":"all .2s ease",
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