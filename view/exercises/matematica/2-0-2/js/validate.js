var element;
var letraY = 0;
var letraG = 0;
var letraM = 0;

$(".letra").draggable({
    revert: false,
    start: function() {
        element=$(this).attr("id");

    }
});


$(".resultado").droppable({
    
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("border", "#333");
    //$( this ).target.append(event.target);
        
    if(element=="y"){
        letraY++;
    }else if(element == "g"){
        letraG++;
    }else if(element == "m"){
        letraM++;
    }
        element.removeClass("pieza");
    }

});

function result_tipo_2_0_2(){
    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var tiempo=min+":"+seg+":"+milseg;

          if( letraY == 1 && letraM == 0 && letraG == 0){
             
             localStorage.setItem("Nota2-0-2","2");
             localStorage.setItem("Time2-0-2", tiempo);
              correcto(); 

          }

          else {

              incorrecto();
              localStorage.setItem("Nota2-0-2","0");
              localStorage.setItem("Time2-0-2", tiempo);
             
          }    
} 
