<<<<<<< HEAD
$('select').formSelect();
var cols = '.grid-container';
listar_random(cols);
=======
/* *TODO: select */
$('select').formSelect();
/* *TODO: random */
var $class='.grid-box';
listar_random($class);
/* *TODO: function */
var r = 0;
$(".slc").change(function() {
    slcalt = $(this).attr("alt");
    slcval = $(this).val();
    // console.log(slcalt);
    // console.log(slcval);
    if (slcalt == slcval) {
        r++;
        console.log(r);
    }
});
>>>>>>> 3a00ae8730a5c1c148f15d6fb8f967db03f450b7
