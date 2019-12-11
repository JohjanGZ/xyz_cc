
$('select').formSelect();
// Select
var p = 0, otro = 0, r = 0, otros = 0;
$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();
    console.log(slcalt);
    console.log(slcval);
    if (slcalt == slcval) {
        p++;
        //console.log(r);
    }else{
        otro++;
    }
    console.log(p)
});
  



$('.indicator').click(function () {
    $(this).css({
        "border": "6px solid",
        "border-color": "transparent",
        "background": "transparent",
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
            otros++;
            $(this).attr("value", "seleccionado");
        }
    }
    // console.log(r);
})