<<<<<<< HEAD
$('select').formSelect();
=======
/* *TODO: select */
$('select').formSelect();
/* *TODO: random */
var cols = document.querySelectorAll('.grid-body');
[].forEach.call(cols, (e) => {
    for (var i = e.children.length; i >= 0; i--) {
        e.appendChild(e.children[Math.random() * i | 0]);
    }
});
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
