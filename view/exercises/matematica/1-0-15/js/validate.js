var r = 0;
// Select Materialize
$('select').formSelect();
// Select
var select1 = document.getElementById('select1');
var select2 = document.getElementById('select2');
var select3 = document.getElementById('select3');
var select4 = document.getElementById('select4');
var select5 = document.getElementById('select5');
var select6 = document.getElementById('select6');
var select7 = document.getElementById('select7');
var select8 = document.getElementById('select8');

select1.addEventListener('change', function() {
    var selected1 = this.options[select1.selectedIndex];
    if (selected1.value == 2) { r++; }
});
select2.addEventListener('change', function() {
    var selected2 = this.options[select2.selectedIndex];
    if (selected2.value == 9) { r++; }
});
select3.addEventListener('change', function() {
    var selected3 = this.options[select3.selectedIndex];
    if (selected3.value == 3) { r++; }
});
select4.addEventListener('change', function() {
    var selected4 = this.options[select4.selectedIndex];
    if (selected4.value == 8) { r++; }
});
select5.addEventListener('change', function() {
    var selected5 = this.options[select5.selectedIndex];
    if (selected5.value == 5) { r++; }
});

select6.addEventListener('change', function() {
    var selected6 = this.options[select6.selectedIndex];
    if (selected6.value == 10) { r++; }
});

select7.addEventListener('change', function() {
    var selected7 = this.options[select7.selectedIndex];
    if (selected7.value == 2) { r++; }
});

select8.addEventListener('change', function() {
    var selected8 = this.options[select8.selectedIndex];
    if (selected8.value == 7) { r++; }
});