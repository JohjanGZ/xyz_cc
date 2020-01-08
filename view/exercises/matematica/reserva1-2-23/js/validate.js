<<<<<<< HEAD:view/exercises/matematica/reserva1-2-23/js/validate.js
var r = 0;
var ul = document.querySelector('.opciones');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var r = 0;
$('.a').click(function() {

    $(this).css({
        "border": "solid",
        "border-color": "#37D3F7",
        "background": "#B6ECFF"
    });
    var element = $(this).attr("alt");
    var select = $(this).attr("value");
    if (select != "seleccionado") {

        if (element == "n") {
=======
    $('select').formSelect();
    // Random
    var cols = document.querySelectorAll('.grid-tabla');
    // console.log(cols);
    [].forEach.call(cols, (e)=>{
        for (var i = e.children.length; i >= 0; i--) {
            e.appendChild(e.children[Math.random() * i | 0]);
        }
    });
    // Select
    var r = 0;
    $(".slc").change(function() {
        slcalt = $(this).attr("alt");
        slcval = $(this).val();
        // console.log(slcalt);
        // console.log(slcval);
        if (slcalt == slcval) {
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-1-17/js/validate.js
            r++;
            console.log(r);
        }
<<<<<<< HEAD:view/exercises/matematica/reserva1-2-23/js/validate.js
    }
})
=======
    });
  
>>>>>>> 2d3a9ce57621caf19b26524197821367e720313d:view/exercises/matematica/1-1-17/js/validate.js
