var cols = document.querySelectorAll('.grid-container');
// console.log(cols);
[].forEach.call(cols, (e) => {
    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }
});

var r = 0;
var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.grid-item-a').click(function() {
    var obj1 = null;
    var valor = $(this).attr("value");
    if (valor != 1) {
        var sitio1 = $(this).index();
        $('.grid-item-a').css({
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
                ctx.moveTo(104, 0);
                break;
            case 1:
                ctx.moveTo(312, 0);
                break;
            case 2:
                ctx.moveTo(520, 0);
                break;
            case 3:
                ctx.moveTo(728, 0);
                break;
            case 4:
                ctx.moveTo(936, 0);
                break;
            case 5:
                ctx.moveTo(1144, 0);
                break;
        }
        valor = 1;
    }

    $('.grid-item-b').click(function() {
        var sitio2 = $(this).index();
        $('.grid-item-b').css({ "background-color": "white" });
        $(this).css({
            "background-color": "silver",
            "background-color": "rgba(254, 205, 84, 0.65)",
            "border": "solid white",
            "box-shadow": "0 0 3px black",
            "z-index": "1"
        });

        var obj2 = $(this).attr("alt");
        console.log(obj2);
        switch (sitio2) {
            case 0:
                ctx.lineTo(104, 100);
                break;
            case 1:
                ctx.lineTo(312, 100);
                break;
            case 2:
                ctx.lineTo(520, 100);
                break;
            case 3:
                ctx.lineTo(728, 100);
                break;
            case 4:
                ctx.lineTo(936, 100);
                break;
            case 5:
                ctx.lineTo(1144, 100);
                break;
        }
        ctx.strokeStyle = "orange";
        ctx.lineWidth = 3;
        ctx.stroke();

        if (obj1 == obj2) {
            r++;
            console.log(r);
        }
    });
});