
var ul = document.querySelector('#piezas');
for (var i = ul.children.length; i >= 0; i--) {
    ul.appendChild(ul.children[Math.random() * i | 0]);
}

var Animal = 0;


   $(".pieza").draggable( {
         start: function() {
          element=$(this).attr("id");
          console.log(element);
      }
   } );

   $( "#recibidor1" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);   
      if(element=="mono"){
        Animal++;
      }

      console.log(element);
      console.log(Animal);
         ui.draggable.draggable("disable", 1);            
      }
    });
   $( "#recibidor2" ).droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);   
      if(element=="tortuga"){
        Animal++;
      }
     console.log(element);
      console.log(Animal);
         ui.draggable.draggable("disable", 1);         
      }
    });
   $( "#recibidor3" ).droppable({
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);   
      if(element=="perro"){
        Animal++;
      }

      console.log(Animal);
         ui.draggable.draggable("disable", 1);             
      }
    });
   $( "#recibidor4" ).droppable({    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function(event, ui){
          $(this).css("background-color", "rgba(139, 195, 74, 0.14)");
      //  $( this ).target.append(event.target);   
      if(element=="sapo"){
        Animal++;
      }

      console.log(Animal);
         ui.draggable.draggable("disable", 1);      
      }
    });

                   function result_tipo_2_1_4(){   

                    var  min= $('#Minutos').text();
                    var  seg= $('#Segundos').text();
                    var  milseg= $('#Centesimas').text();
                    var tiempo=min+":"+seg+":"+milseg;

                          if(Animal==4){                   
                                      localStorage.setItem("Nota2-1-4","2");
                                      localStorage.setItem("Time2-1-4", tiempo);
                                      correcto(); 
                                  }
                                  else {
                                      incorrecto();
                                      localStorage.setItem("Nota2-1-4","0");
                                      localStorage.setItem("Time2-1-4", tiempo);                  
                                  }    
                    } 