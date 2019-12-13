var cols = document.querySelectorAll('.alfabeto');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});

function comprobar_listas() {

    var cont = 1;
    correct = '["1","2","3","4","5","6","7","8"]';

    $(".alfabeto").each(function() {

        var order = $(this).sortable("toArray");
        order = JSON.stringify(order);
        console.log("afuera: " + order);
        console.log("afuera: " + correct);
        if (cont == 1) {
            console.log(order);
            console.log(correct);
            if (order == correct || order == '["1","2","3","4","5","8","7","6"]') {
                r++;
            }
        } else {
            if (order == correct) {
                r++;
            }
        }
        cont++;
        console.log(r);
    });
}