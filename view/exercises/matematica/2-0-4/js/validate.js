var element;
var verde = 0;
var rojo = 0;

$(".opcion").draggable({
    revert: false,
    start: function() {
        element=$(this).attr("id");

    }
});


$(".verde").droppable({
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("border", "#333");
    //$( this ).target.append(event.target);

    if(element=="verde"){
        verde++
    }
        element.removeClass("pieza");
    }

});
$(".rojo").droppable({
    
    classes: {
        "ui-droppable-hover": "ui-state-hover"
    },
    drop: function( event, ui ) {
        $(this).css("border", "#333");
    //$( this ).target.append(event.target);

    if(element=="rojo"){
        rojo++
    }
        element.removeClass("pieza");
    }

});

function result_tipo_2_0_4(){
    var  min= $('#Minutos').text();
    var  seg= $('#Segundos').text();
    var  milseg= $('#Centesimas').text();
    var tiempo=min+":"+seg+":"+milseg;

          if( verde == 1 && rojo ==1 ){
             
             localStorage.setItem("Nota2-0-4","2");
             localStorage.setItem("Time2-0-4", tiempo);
              correcto(); 

          }

          else {

              incorrecto();
              localStorage.setItem("Nota2-0-4","0");
              localStorage.setItem("Time2-0-4", tiempo);
             
          }    
} 
