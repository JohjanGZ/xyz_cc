var r = 0;

var ul = document.querySelector('#listA');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var ul = document.querySelector('#listB');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.a').click(function() {
    var obj1 = null;
    var obj2 = null;
    var valor = $(this).attr("value");
    if (valor != 1) {
        var sitio1 = $(this).index();
        $('.a').css({
            "background-color": "white",
            "border": "solid 1px silver",
            "box-shadow": "none",
            "z-index": "0"
        });

        $(this).css({
            "background-color": "silver",
            "background-color": "rgba(254, 205, 84, 0.65)",
            "border": "solid white",
            "box-shadow": "0 0 3px black",
            "z-index": "1"
        });

        obj1 = $(this).attr("alt");
        console.log(obj1);
        ctx.beginPath();
        switch (sitio1) {
            case 0:
                ctx.moveTo(0, 60);
                break;
            case 1:
                ctx.moveTo(0, 180);
                break;
            case 2:
                ctx.moveTo(0, 300);
                break;
            case 3:
                ctx.moveTo(0, 420);
                break;
        }
        valor = 1;
    }



    $('.b').click(function() {

        var sitio2 = $(this).index();
        $('.b').css({ "background-color": "white" });
        $(this).css({ "background-color": "silver", "background-color": "rgba(254, 205, 84, 0.65)", "border": "solid white", "box-shadow": "0 0 3px black", "z-index": "1" });
        var obj2 = $(this).attr("alt");
        console.log(obj2);
        switch (sitio2) {
            case 0:
                ctx.lineTo(300, 60);
                break;
            case 1:
                ctx.lineTo(300, 180);
                break;
            case 2:
                ctx.lineTo(300, 300);
                break;
            case 3:
                ctx.lineTo(300, 420);
                break;
        }
        ctx.strokeStyle = "rgb(127, 27, 91)";
        ctx.lineWidth = 7;

        ctx.stroke();

        if (obj1 == obj2) {
            r++;
            console.log(r);
        }
    });
});