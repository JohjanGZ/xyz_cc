/**
 * TODO: Random
 */
var cols = document.querySelectorAll('.grid-preguntas, .grid-option');
[].forEach.call(cols, (e)=>{
    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }
});
/**
 * TODO: Seleccion
 */
var r = 0;
$('.grid-item').click(function() {
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
        console.log(r);
    }
})