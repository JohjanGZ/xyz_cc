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
        if(slcval == 1){
            slcval = 'u';
        } else if(slcval == 2){
            slcval = 'd';
        } else if(slcval == 3){
            slcval ='t';
        }else if( slcval == 4){
            slcval = 'c';
        }
        // console.log(slcalt);
        // console.log(slcval);
        if (slcalt == slcval) {
            r++;
            //console.log(r);
        }else{
            otros++;
        }
        console.log(r)
    });
  