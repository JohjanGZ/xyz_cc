var element;
var letraY = 0;
var letraG = 0;
var letraM = 0;

$(".letra").draggable({
    revert: false,
    start: function() {
        element=$(this).attr("id");
        $(this).css("background", "#none");
    }
});


$(".resultado").droppable({
    
    classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("background", "#none");
    //$( this ).target.append(event.target);
        
    if(element=="y"){
        letraY++;
    }else if(element == "g"){
        letraG++;
    }else if(element == "m"){
        letraM++;
    }
        ui.draggable.draggable("disable", 1);
    }

});

function result_tipo_2_0_3(){
    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var tiempo=min+":"+seg+":"+milseg;

          if( letraY == 1 && letraM == 0 && letraG == 0){
             
             localStorage.setItem("Nota2-0-3","2");
             localStorage.setItem("Time2-0-3", tiempo);
              correcto(); 

          }

          else {

              incorrecto();
              localStorage.setItem("Nota2-0-3","0");
              localStorage.setItem("Time2-0-3", tiempo);
             
          }    
} 
