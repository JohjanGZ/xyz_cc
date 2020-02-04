var r = 0;

$(".seleccion").click(function() {

    if ($(this).attr("alt") == "") {
        r++;
        $(this).attr("alt", "xd");
    }
    $(this).css({
        "background-color": "#8be1f2",
        "border-color": "#37d3f7"
    });
});