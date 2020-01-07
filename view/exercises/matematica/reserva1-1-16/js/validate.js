var r = 0;
// Select Materialize
$('select').formSelect();
// Select
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');
var select3 = document.getElementById('select3');
var select4 = document.getElementById('select4');

select1.addEventListener('change',
    function() {
        var selected1 = this.options[select1.selectedIndex];
        // console.log(selected1.value);
        if (selected1.value == 1) {
            r++;
            // console.log(r);
        }
    });
select2.addEventListener('change',
    function() {
        var selected2 = this.options[select2.selectedIndex];
        // console.log(selected2.value);
        if (selected2.value == 2) {
            r++;
            // console.log(r);
        }
    });
select3.addEventListener('change',
    function() {
        var selected3 = this.options[select3.selectedIndex];
        // console.log(selected2.value);
        if (selected3.value == 1) {
            r++;
            // console.log(r);
        }
    });
select4.addEventListener('change',
    function() {
        var selected4 = this.options[select4.selectedIndex];
        // console.log(selected2.value);
        if (selected4.value == 7) {
            r++;
            // console.log(r);
        }
    });