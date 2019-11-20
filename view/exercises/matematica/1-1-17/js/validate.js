var r = 0;
$('.caja').click(function() {
    $(this).css({
        "background": "#B6ECFF"
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
        console.log(r);
    }
})