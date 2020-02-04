var r = 0;
$('.rectangulo, .triangulo').click(function() {
    $(this).css("fill", "#eaff9191");
    if ($(this).attr("alt") == "") {
        r++;
        console.log(r);
    } else {
        $(this).attr("alt", "xd");
    }

});