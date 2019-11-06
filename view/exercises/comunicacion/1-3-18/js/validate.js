var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

var formas = 0;
var r = 0;
$('.formas img').click(function () {
    formas = null;
    var valor = null;
    var espacio = null;
    formas = $(this).attr("src");
    valor = $(this).attr("id");
    //console.log(valor);
    //console.log(formas);
    $('.formas img').css({ "transform": "scale(1)", "border": "none", "box-shadow": "none" });
    $(this).css({ "border": "solid rgb(254, 206, 87)", "box-shadow": "0 0 4px #00000057" });


    $('li div').click(function () {

        var lineas = $(this).attr("class");
        //console.log(lineas);
        espacio = $(this).attr("alt");
        //console.log(formas);

        if (lineas == "box") {
            $(this).css({ "background-image": "url("+formas+")", "background-size" : "cover", "text-align" : "center", "background-position" : "center" });
    
            if (valor == espacio) {
                r++;
                //$(this).removeClass("box");
                console.log(r);
            }


        }
    });
});