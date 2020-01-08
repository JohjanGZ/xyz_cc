var r = 0;
// Select Materialize
$('select').formSelect();
// Select
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');
var select3 = document.getElementById('select3');

select1.addEventListener('change',
    function() {
        var selected1 = this.options[select1.selectedIndex];
        // console.log(selected1.value);
        if (selected1.value == 10) {
            r++;
            // console.log(r);
        }
    });
select2.addEventListener('change',
    function() {
        var selected2 = this.options[select2.selectedIndex];
        // console.log(selected2.value);
        if (selected2.value == 1) {
            r++;
            // console.log(r);
        }
    });
select3.addEventListener('change',
    function() {
        var selected3 = this.options[select3.selectedIndex];
        // console.log(selected2.value);
        if (selected3.value == 10) {
            r++;
            // console.log(r);
        }
    });