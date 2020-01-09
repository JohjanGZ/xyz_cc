
function result_tipo_2_2_16(){               
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