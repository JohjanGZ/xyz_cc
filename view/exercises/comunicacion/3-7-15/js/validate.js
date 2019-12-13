var cols = document.querySelectorAll('.alfabeto');

[].forEach.call(cols, (e) => {

    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }

});

function comprobar_listas() {

    correct = '["1","2","3","4","5","6"]';

    $(".alfabeto").each(function() {
        var order = $(this).sortable("toArray");
        order = JSON.stringify(order);
        if (order == correct) {
            r++;
        }
    });
}