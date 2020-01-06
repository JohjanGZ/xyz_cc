var r = 0;

$('.indicator').click(function () {
    $(this).css({
        "border": "6px solid",
        "border-color": "transparent",
        "background": "transparent",
        "background-image": "url(../../../exercises/matematica/1-0-25/img/huella.png)",
        "background-size": "contain",
        "background-repeat": "no-repeat",
        "background-color": "#B6ECFF"
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
    // console.log(r);
})