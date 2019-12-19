    $('select').formSelect();
    // Random
    // var div = document.querySelector('.grid-container');
    // for (var i = div.children.length; i >= 0; i--) {
    //     div.appendChild(div.children[Math.random() * i | 0]);
    // }
    // Select
    var r = 0, otros = 0;
    $(".slc").change(function() {
        slcalt = $(this).attr("alt");
        slcval = $(this).val();
        if (slcalt == slcval) {
            r++;
        }
        console.log(r)
    });
  