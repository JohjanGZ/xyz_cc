var r = 0;
$('.circulo, .triangulo').click(function() {
    $(this).css("fill", "#eaff9191");
    if ($(this).attr("alt") == "") {
        r++;
        $(this).attr("alt", "xd");
    }
});