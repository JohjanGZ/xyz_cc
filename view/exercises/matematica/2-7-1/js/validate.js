    var ul = document.querySelector('.fila1 .row');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
     ul.appendChild(ul.children[Math.random() * i | 0]);
}

  var r=0;
  $('.item img').click(function(){
    $(this).css({"border":"solid" , "border-color":"#37D3F7","background":"#B6ECFF"});
     var element=$(this).attr("alt");
    
      var select=$(this).attr("value");
      if(select!="seleccionado"){

      if(element=="n"){
        r++;
         $(this).attr("value","seleccionado");
      }
      else{
        r--;
         $(this).attr("value","seleccionado");
      }
      console.log(r);
    }
  })

function result_tipo_1_0_6(){               
                  var  min= $('#Minutos').text();
                  var  seg= $('#Segundos').text();
                  var  milseg= $('#Centesimas').text();
                  var tiempo=min+":"+seg+":"+milseg;

        if(r==4)
                {
                    localStorage.setItem("Nota2-1-6","2");
                    localStorage.setItem("Time2-1-6", tiempo);
                    correcto(); 
                }
                else {
                    incorrecto();
                    localStorage.setItem("Nota2-1-6","0");
                    localStorage.setItem("Time2-1-6", tiempo);  
                }    
            } 