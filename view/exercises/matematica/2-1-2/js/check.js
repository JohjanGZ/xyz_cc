
function result_tipo_2_1_2(){

     var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

  if(       
        (
        (document.getElementById('Ta').parentNode.id=='v') 
        &&  
        (document.getElementById('Ti').parentNode.id=='v')
        &&  
        (document.getElementById('Te').parentNode.id=='v')         
        )
&&
         (
        (document.getElementById('pina').parentNode.id=='f') 
        &&  
        (document.getElementById('pera').parentNode.id=='f')
        &&
        (document.getElementById('uva').parentNode.id=='f')      
        )
    )
{
        localStorage.setItem("Nota2-1-2","2");
        localStorage.setItem("Time2-1-2", tiempo);
        correcto(); 
}
    else {

        incorrecto();
        localStorage.setItem("Nota2-1-2","0");
        localStorage.setItem("Time2-1-2", tiempo);
       
    }
} 