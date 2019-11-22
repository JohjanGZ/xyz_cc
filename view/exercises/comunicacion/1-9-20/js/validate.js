var ul = document.querySelector('.grid-container');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}
var r = 0;
// Select Materialize
$('select').formSelect();
// Select
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');

select1.addEventListener('change',
    function() {
        var selected1 = this.options[select1.selectedIndex];
        if (selected1.value == 'cuadro') {
            r++;
        }
    });
select2.addEventListener('change',
    function() {
        var selected2 = this.options[select2.selectedIndex];
        if (selected2.value == 'dragón') {
            r++;
        }
    });

var select3 = document.getElementById('select3');
var select4 = document.getElementById('select4');

select3.addEventListener('change',
    function() {
        var selected3 = this.options[select3.selectedIndex];
        if (selected3.value == 'podrido') {
            r++;
        }
    });
select4.addEventListener('change',
    function() {
        var selected4 = this.options[select4.selectedIndex];
        if (selected4.value == 'ladra') {
            r++;
        }
    });

var select5 = document.getElementById('select5');
// var select6 = document.getElementById('select6');

select5.addEventListener('change',
    function() {
        var selected5 = this.options[select5.selectedIndex];
        if (selected5.value == 'ladrón') {
            r++;
        }
    });
// select6.addEventListener('change',
//     function() {
//         var selected6 = this.options[select6.selectedIndex];
//         if (selected6.value == 2) {
//             r++;
//         }
//     });