var r = 0;

var ul = document.querySelector('.contenedor-ejercicios');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}


// var cols = document.querySelectorAll('.contenedor-check');

// [].forEach.call(cols, (e)=>{

//     for (var i = e.children.length; i >= 0; i--) {
//         e.appendChild(e.children[Math.random() * i | 0]);
//     }

// });

$(".palabra").click(function() {
    $(this).css({
        "border": "solid",
        "border-color": "#37D3F7",
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
    }
});