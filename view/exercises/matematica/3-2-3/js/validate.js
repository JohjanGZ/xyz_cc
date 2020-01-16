/**
 * TODO: Random
 */
var cols = document.querySelectorAll('#sortable');
[].forEach.call(cols, (e) => {
    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }
});
/**
 * TODO: Orden
 */
var r = false;
ordenar_lista();
