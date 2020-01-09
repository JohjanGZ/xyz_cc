$('select').formSelect();
// Random
var div = document.querySelector('.grid-container');
for (var i = div.children.length; i >= 0; i--) {
    div.appendChild(div.children[Math.random() * i | 0]);
}
// Select
var r = 0;
$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();
    if(slcval == 'El avión'){
        slcval = 'avion';
    } else if(slcval == 'El auto'){
        slcval = 'auto';
    } else if( slcval == '19 niños'){
        slcval = '19';
    }
    console.log(slcalt);
    console.log(slcval);
    if (slcalt == slcval) {
        r++;
        console.log(r);
    }
});
