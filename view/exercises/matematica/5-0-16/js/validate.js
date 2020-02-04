var cols = '.grid-container';
listar_random(cols);

var r = 0;
var canvas = document.getElementById("micanvas");
var ctx = canvas.getContext("2d");

$('.grid-item-a').click(function() {
    var obj1 = null;
    var valor = $(this).attr("value");
    if (valor != 1) {
        var sitio1 = $(this).index();
        $(this).children('span').css({
            "color": "red",
            "font-weight": "600"
        });
        $(this).css({

            "z-index": "1"
        });
        obj1 = $(this).attr("alt");
        // console.log(obj1);
        ctx.beginPath();
        switch (sitio1) {
            case 0:
                ctx.moveTo(0, 25);
                break;
            case 1:
                ctx.moveTo(0, 110);
                break;
            case 2:
                ctx.moveTo(0, 190);
                break;
            case 3:
                ctx.moveTo(0, 275);
                break;
            case 4:
                ctx.moveTo(0, 380);
                break;
            case 5:
                ctx.moveTo(0, 470);
                break;
        }
        valor = 1;
    }

    $('.grid-item-b').click(function() {
        var sitio2 = $(this).index();
        $(this).css({

            "z-index": "1"
        });

        var obj2 = $(this).attr("alt");
        // console.log(obj2);
        switch (sitio2) {
            case 0:
                ctx.lineTo(95, 25);
                break;
            case 1:
                ctx.lineTo(100, 110);
                break;
            case 2:
                ctx.lineTo(100, 190);
                break;
            case 3:
                ctx.lineTo(100, 275);
                break;
            case 4:
                ctx.lineTo(100, 380);
                break;
            case 5:
                ctx.lineTo(100, 470);
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