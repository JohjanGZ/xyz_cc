var nAnimal = 0;
var nJuguete = 0;
var nDulce= 0;


   $(".pieza").draggable( {
         start: function() {
          element=$(this).attr("id");
      }
   } );

   $( "#tres" ).droppable({
    
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
      //  $( this ).target.append(event.target);

        if(element=="animal"){
         nAnimal++
        }
          $( this ).html(nAnimal);
      }
    });


   $( "#dos" ).droppable({
        
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
      //  $( this ).target.append(event.target);

              if(element=="dulce"){
         nDulce++
        }
          $( this ).html(nDulce);
      }
    });

   $( "#uno" ).droppable({
          classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },

      drop: function( event, ui ) {
  
      //  $( this ).target.append(event.target);

              if(element=="juguete"){
         nJuguete++
        }
          $( this ).html(nJuguete);

      }
    });


   function result_tipo_2_1_1(){
      var  min= $('#Minutos').text();
     var  seg= $('#Segundos').text();
     var  milseg= $('#Centesimas').text();
     var tiempo=min+":"+seg+":"+milseg;

            if( nAnimal == 4 && nDulce==3 && nJuguete ==2 )

    {
       
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